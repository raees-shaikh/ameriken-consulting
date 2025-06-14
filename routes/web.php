<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/who-we-are', function () {
    return view('frontend.about-us');
});

// Route::get('/industries', function () {
//     return view('frontend.industries');
// });


Route::get('/equity-inclusion', function () {
    return view('frontend.equity-inclusion');
});

Route::get('/affiliate-offices', function () {
    return view('frontend.affiliate-offices');
});

Route::get('/technology-cybersecurity', function () {
    return view('frontend.technology-cybersecurity');
});

Route::get('/accounting-assurance', function () {
    return view('frontend.accounting-assurance');
});

Route::get('/advisory', function () {
    return view('frontend.advisory');
});

Route::get('/tax', function () {
    return view('frontend.tax');
});
Route::get('/our-clients', function () {
    return view('frontend.our-clients');
});

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});



Route::get('/#indust', function () {
    return view('frontend.index');
});
Route::post('contact/submit', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');

// Route::get('/audit-assurance', function () {
//     return view('frontend.services.audit-assurance');
// });

// Route::get('/income-tax', function () {
//     return view('frontend.services.income-tax');
// });

// Route::get('/goods-service-tax', function () {
//     return view('frontend.services.goods-service-tax');
// });

// Route::get('/risk-advisory-services', function () {
//     return view('frontend.services.risk-advisory-services');
// });
// Route::get('/services-non-residents', function () {
//     return view('frontend.services.services-non-residents');
// });
// Route::get('/outsourcing-international-co', function () {
//     return view('frontend.services.outsourcing-international-co');
// });
// Route::get('/us-outsourcing-work', function () {
//     return view('frontend.services.us-outsourcing-work');
// });
Route::get('/construction-accounts-advisors', function () {
    return view('frontend.industries.construction-accounts-advisors');
});
Route::get('/government', function () {
    return view('frontend.industries.government');
});

Route::get('/manufacturing', function () {
    return view('frontend.industries.manufacturing');
});
Route::get('/retail-consumer-sector', function () {
    return view('frontend.industries.retail-consumer-sector');
});
Route::get('/technology', function () {
    return view('frontend.industries.technology');
});

Route::get('/logistics', function () {
    return view('frontend.industries.logistics');
});

Route::get('/media-entertainment', function () {
    return view('frontend.industries.media-entertainment');
});
