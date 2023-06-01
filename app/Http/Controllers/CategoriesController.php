<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Properties;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\Settings;
use Exception;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $formFields = $request->validate([
            'category_name' =>  ['required', 'string', 'max:255'],
         ]);

         Categories::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->back()->with('success-message', 'Category Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category): View
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    // print category

    public function printCategory (Categories $category) {
        // review and rating
       /*  dd($category);
        $category = Categories::findOrFail($category);
        dd($category); */


        $categoryName = $category->category_name;
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection(array('orientation' => 'landscape'));

        $styleTitle = array(
            'allCaps' => 'true',
            'size' => 42,
            'alignment' => 'center',
            'orientation' => 'landscape',
            'marginTop' => 30,
        );

        $sizeTableHeader = array(
            'size' => 36,
        );

        $size = array(
            'size' => 32,
        );
        $section->addText($categoryName, $styleTitle);

        $table = array('borderColor'=>'black', 'borderSize'=> 1, 'cellMargin'=>50, 'valign'=>'center');
        $phpWord->addTableStyle('table', $table);
        $table = $section->addTable('table');
  /*       $table->addRow();
        $table->addCell(1750)->addText(htmlspecialchars("PROPERTY NAME"), $sizeTableHeader); */
        // $table->addCell(1750)->addText(htmlspecialchars(""), $sizeTableHeader);

        foreach($category->properties as $category) {
                $property_name = $category->property_name;
                // $numberOfReviews =  $property->reviews->count();

                $table->addRow();
                $table->addCell(8000)->addText($property_name, $size);
                // $table->addCell(8000)->addText($numberOfReviews, $size);
            }

    \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    try {
        $objWriter->save(storage_path('Categories.docx'));
    } catch (Exception $e) {
      return redirect('/dashboard')->with('danger-message', 'Error!');
    }
    return response()->download(storage_path('Categories.docx'))->deleteFileAfterSend(true);
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesRequest  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Categories $category)
    {
        $request->validate([
            'category_name' => 'required',

        ]);

        $category->update([
            'category_name' => $request->category_name,

        ]);

        return redirect(route('categories.index'))->with('success-message', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect(route('categories.index'))->with('danger-message', 'Category deleted successfully!');
    }
}
