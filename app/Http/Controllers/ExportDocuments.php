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
        $total_tourists_per_year = DB::table('tour_registrations')->select(
                  DB::raw("DATE_FORMAT(tour_date, '%Y') as year"),
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
                  )
                  ->where('status', 'already_left')
                  ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%Y')"))
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
            $total_of_tourist = $total_tourist_per_year->total_number_of_adults + $total_tourist_per_year->total_number_of_children + $total_tourist_per_year->total_number_of_infants +$total_tourist_per_year->total_number_of_foreigner;
            $tour_year = $total_tourist_per_year->year;

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

    //  month
     public function numberofArrivalmonthOfYear() {
                // every month of every year
                $month_of_year = DB::table('tour_registrations')->select(
                  DB::raw("DATE_FORMAT(tour_date, '%M-%Y') as month"),
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
                  )
                  ->where('status', 'already_left')
                  ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%M-%Y')"))
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
        $section->addText('TOURIST ARRIVAL BY MONTH', $styleTitle);

        $table = array('borderColor'=>'black', 'borderSize'=> 1, 'cellMargin'=>50, 'valign'=>'center');
        $phpWord->addTableStyle('table', $table);
        $table = $section->addTable('table');
        $table->addRow();
        $table->addCell(1750)->addText(htmlspecialchars("MONTH"), $sizeTableHeader);
        $table->addCell(1750)->addText(htmlspecialchars("TOURIST NUMBER"), $sizeTableHeader);

        foreach($month_of_year as $month_of_year_arrival) {
            $total_of_tourist = $month_of_year_arrival->total_number_of_adults + $month_of_year_arrival->total_number_of_children + $month_of_year_arrival->total_number_of_infants +$month_of_year_arrival->total_number_of_foreigner;
            $month = $month_of_year_arrival->month;

              $table->addRow();
            $table->addCell(8000)->addText($month, $size);
            $table->addCell(8000)->addText($total_of_tourist, $size);
            }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerMonth.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerMonth.docx'))->deleteFileAfterSend(true);
     }

    //  day
     public function numberofArrivalPerDay() {
                // every day
                //  every day
                 $arrival_per_day = DB::table('tour_registrations')->select(
                  DB::raw("DATE_FORMAT(tour_date, '%M-%d-%Y') as day"),
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
                  )
                  ->where('status', 'already_left')
                  ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%M-%d-%Y')"))
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
        $section->addText('TOURIST ARRIVAL PER DAY', $styleTitle);

        $table = array('borderColor'=>'black', 'borderSize'=> 1, 'cellMargin'=>50, 'valign'=>'center');
        $phpWord->addTableStyle('table', $table);
        $table = $section->addTable('table');
        $table->addRow();
        $table->addCell(1750)->addText(htmlspecialchars("DATE"), $sizeTableHeader);
        $table->addCell(1750)->addText(htmlspecialchars("TOURIST NUMBER"), $sizeTableHeader);

        foreach($arrival_per_day as $per_day) {
            $total_of_tourist = $per_day->total_number_of_adults + $per_day->total_number_of_children + $per_day->total_number_of_infants +$per_day->total_number_of_foreigner;
            $date = $per_day->day;

              $table->addRow();
            $table->addCell(8000)->addText($date, $size);
            $table->addCell(8000)->addText($total_of_tourist, $size);
            }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerDay.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerDay.docx'))->deleteFileAfterSend(true);
     }

    //  number of tourist
    public function numberOfTourists() {
                    // number of tourists
            $adults = TourRegistration::where('status', 'already_left')->pluck('number_of_adults')->toArray();
            $children = TourRegistration::where('status', 'already_left')->pluck('number_of_children')->toArray();
            $infants = TourRegistration::where('status', 'already_left')->pluck('number_of_infants')->toArray();
            $foreigners = TourRegistration::where('status', 'already_left')->pluck('number_of_foreigner')->toArray();
            $total_of_adults = array_sum($adults);
            $total_of_children = array_sum($children);
            $total_of_infants = array_sum($infants);
            $total_of_foreigner = array_sum($foreigners);
            $totalTourists =  $total_of_adults + $total_of_children + $total_of_infants + $total_of_foreigner;

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

         $section->addText('NUMBER OF TOURISTS', $styleTitle);
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
