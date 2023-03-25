<?php

namespace App\Http\Controllers;

use App\Models\RegisterUnclassifiedTourist;
use App\Models\TourRegistration;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportDocuments extends Controller
{
     public function arrivalPerYear() {
                // total number of tourist per year
        $total_tourists_per_year = DB::table('tour_registrations')->select('tour_date',
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants')
                  )
                  ->where('status', 'already_left')
                  ->groupBy('tour_date')
                  ->get();
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
        $section->addText('TOURIST ARRIVAL BY YEAR', $styleTitle);

        $table = array('borderColor'=>'black', 'borderSize'=> 1, 'cellMargin'=>50, 'valign'=>'center');
        $phpWord->addTableStyle('table', $table);
        $table = $section->addTable('table');
        $table->addRow();
        $table->addCell(1750)->addText(htmlspecialchars("YEAR"), $sizeTableHeader);
        $table->addCell(1750)->addText(htmlspecialchars("TOURIST NUMBER"), $sizeTableHeader);

        foreach($total_tourists_per_year as $total_tourist_per_year) {
            $total_of_tourist = $total_tourist_per_year->total_number_of_adults + $total_tourist_per_year->total_number_of_children + $total_tourist_per_year->total_number_of_infants;
            $tour_year = \Carbon\Carbon::parse($total_tourist_per_year->tour_date)->isoFormat('YYYY');

              $table->addRow();
            $table->addCell(8000)->addText($tour_year, $size);
            $table->addCell(8000)->addText($total_of_tourist, $size);
            }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerYear.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerYear.docx'))->deleteFileAfterSend(true);
     }

    //  number of tourist
    public function numberOfTourists() {
                    // number of tourists
            $adults = TourRegistration::where('status', 'already_left')->pluck('number_of_adults')->toArray();
            $children = TourRegistration::where('status', 'already_left')->pluck('number_of_children')->toArray();
            $infants = TourRegistration::where('status', 'already_left')->pluck('number_of_infants')->toArray();
            $foreigners = TourRegistration::where('status', 'already_left')->pluck('number_of_foreigner')->toArray();
            $infants_unclassified = RegisterUnclassifiedTourist::pluck('number_of_adults')->toArray();
            $children_unclassified = RegisterUnclassifiedTourist::pluck('number_of_children')->toArray();
            $adults_unclassified = RegisterUnclassifiedTourist::pluck('number_of_infants')->toArray();
            $foreigners_unclassified = RegisterUnclassifiedTourist::pluck('number_of_foreigners')->toArray();
            $total_of_adults = array_sum($adults);
            $total_of_children = array_sum($children);
            $total_of_infants = array_sum($infants);
            $total_of_foreigner = array_sum($foreigners);
            $total_of_infants_unclassified = array_sum($infants_unclassified);
            $total_of_children_unclassified = array_sum($children_unclassified);
            $total_of_adults_unclassified = array_sum($adults_unclassified);
            $total_of_foreigners_unclassified = array_sum($foreigners_unclassified);
            $totalTourists =  $total_of_adults + $total_of_children + $total_of_infants +
            $total_of_infants_unclassified + $total_of_adults_unclassified + $total_of_children_unclassified + $total_of_foreigner + $total_of_foreigners_unclassified;

                    $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection(array('orientation' => 'landscape'));

       $styleTitle = array(
            'allCaps' => 'true',
            'size' => 35,
            'alignment' => 'center',
            'orientation' => 'landscape',
            'marginTop' => 30,
        );

       $content = array(
            'size' => 50,
          'marginTop' => 20,
        );

         $section->addText('TOURIST ARRIVAL BY YEAR', $styleTitle);
         $section->addText($totalTourists, $content);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('NumberOfTourists.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('NumberOfTourists.docx'))->deleteFileAfterSend(true);
    }

    //  number of day tourist
    public function dayTourist() {
   $day_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->count();

                    $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection(array('orientation' => 'landscape'));

       $styleTitle = array(
            'allCaps' => 'true',
            'size' => 35,
            'alignment' => 'center',
            'orientation' => 'landscape',
            'marginTop' => 30,
        );

       $content = array(
            'size' => 50,
          'marginTop' => 20,
        );

         $section->addText('NUMBER OF DAY TOURISTS', $styleTitle);
         $section->addText($day_tourists, $content);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('NumberOfDayTourists.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('NumberOfDayTourists.docx'))->deleteFileAfterSend(true);
    }

    //  number of night tourist
    public function nightTourist() {
   $night_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->count();

                    $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection(array('orientation' => 'landscape'));

       $styleTitle = array(
            'allCaps' => 'true',
            'size' => 35,
            'alignment' => 'center',
            'orientation' => 'landscape',
            'marginTop' => 30,
        );

       $content = array(
            'size' => 50,
          'marginTop' => 20,
        );

         $section->addText('NUMBER OF NIGHT TOURISTS', $styleTitle);
         $section->addText($night_tourists, $content);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('NumberOfNightTourists.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('NumberOfNightTourists.docx'))->deleteFileAfterSend(true);
    }
}
