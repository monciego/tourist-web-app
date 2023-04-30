<?php

namespace App\Http\Controllers;

use App\Models\RegisterUnclassifiedTourist;
use App\Models\TourRegistration;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\Settings;

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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerYear.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerYear.docx'))->deleteFileAfterSend(true);
     }

    //  specific year
     public function arrivalPerSpecificYear($year) {
        // total number of tourist per year
        $total_tourists_per_specific_year = DB::table('tour_registrations')->select(
            DB::raw("DATE_FORMAT(tour_date, '%Y') as year"),
            DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
            DB::raw( 'SUM(number_of_children) as total_number_of_children'),
            DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
            DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
        )
        ->where('status', 'already_left')
        ->whereYear('tour_date', $year)
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

       $content = array(
            'size' => 50,
          'marginTop' => 20,
        );

        $section->addText('TOURIST ARRIVAL BY YEAR', $styleTitle);

        foreach($total_tourists_per_specific_year as $total_tourist_per_year) {
            $total_of_tourist = $total_tourist_per_year->total_number_of_adults + $total_tourist_per_year->total_number_of_children + $total_tourist_per_year->total_number_of_infants +$total_tourist_per_year->total_number_of_foreigner;
            $tour_year = $total_tourist_per_year->year;

            $section->addText($tour_year, $content);
            $section->addText($total_of_tourist, $content);
        }

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerSpecificYear.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerSpecificYear.docx'))->deleteFileAfterSend(true);
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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerMonth.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerMonth.docx'))->deleteFileAfterSend(true);
     }

    //  specifc month
     public function arrivalPerSpecificMonth($month) {
        // total number of tourist per specific month
        $total_tourists_for_specific_month = DB::table('tour_registrations')->select(
            DB::raw("DATE_FORMAT(tour_date, '%m-%Y') as month"),
            // DB::raw("tour_date"),
            DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
            DB::raw( 'SUM(number_of_children) as total_number_of_children'),
            DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
            DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
        )
        ->where('status', 'already_left')
        ->whereMonth('tour_date', $month)
        ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%m-%Y')"))
        ->get();

        // dd($month);
        // dd($total_tourists_for_specific_month);

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection(array('orientation' => 'landscape'));

        $styleTitle = array(
            'allCaps' => 'true',
            'size' => 42,
            'alignment' => 'center',
            'orientation' => 'landscape',
            'marginTop' => 30,
        );

       $content = array(
            'size' => 50,
          'marginTop' => 20,
        );

        $section->addText('TOURIST ARRIVAL BY MONTH', $styleTitle);

        foreach($total_tourists_for_specific_month as $total_tourist_per_month) {
            $total_of_tourist = $total_tourist_per_month->total_number_of_adults + $total_tourist_per_month->total_number_of_children + $total_tourist_per_month->total_number_of_infants +$total_tourist_per_month->total_number_of_foreigner;
            $tour_month = $total_tourist_per_month->month;

            $section->addText($tour_month, $content);
            $section->addText($total_of_tourist, $content);
        }

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('TouristArrivalPerSpecificMonth.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('TouristArrivalPerSpecificMonth.docx'))->deleteFileAfterSend(true);
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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);

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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);


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
        $adults_day_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->pluck('number_of_adults')->toArray();
        $children_day_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->pluck('number_of_children')->toArray();
        $infants_day_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->pluck('number_of_infants')->toArray();
        $foreigners_day_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->pluck('number_of_foreigner')->toArray();
        $total_of_adults_day_tour = array_sum($adults_day_tourist);
        $total_of_children_day_tour = array_sum($children_day_tourist);
        $total_of_infants_day_tour = array_sum($infants_day_tourist);
        $total_of_foreigner_day_tour = array_sum($foreigners_day_tourist);
        $day_tourists = $total_of_adults_day_tour + $total_of_children_day_tour + $total_of_infants_day_tour + $total_of_foreigner_day_tour;

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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);
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
        $adults_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_adults')->toArray();
        $children_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_children')->toArray();
        $infants_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_infants')->toArray();
        $foreigners_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_foreigner')->toArray();
        $total_of_adults_night_tour = array_sum($adults_night_tourist);
        $total_of_children_night_tour = array_sum($children_night_tourist);
        $total_of_infants_night_tour = array_sum($infants_night_tourist);
        $total_of_foreigner_night_tour = array_sum($foreigners_night_tourist);
        $night_tourists = $total_of_adults_night_tour + $total_of_children_night_tour + $total_of_infants_night_tour + $total_of_foreigner_night_tour;

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

        \PhpOffice\PhpWord\Settings::setZipClass(Settings::PCLZIP);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('NumberOfNightTourists.docx'));
        } catch (Exception $e) {
          return redirect('/dashboard')->with('danger-message', 'Error!');
        }
        return response()->download(storage_path('NumberOfNightTourists.docx'))->deleteFileAfterSend(true);
    }
}
