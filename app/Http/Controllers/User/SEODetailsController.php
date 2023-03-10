<?php

namespace App\Http\Controllers\User;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SEODetailsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $websiteName = config('app.name');
        $title = 'Search Engine Optimization Services Offered At Magnific Coding Kenya Limited';
        $desc = 'Search engine optimization services offered at Magnific Coding Kenya Limited';
        $keywords = 'offered seo services,offered search engine optimization services';
        $url = URL::current();
        $tel = '+254 724351952';
        $logo = 'https://magnificcoding.com/static/logo.jpg';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','Article');
        OpenGraph::addProperty('locale','en-US');

        Twitter::setTitle($title);
        Twitter::setSite('@magnificcoding');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('Article');
        JsonLd::addImage($logo);

        $seo = Schema::Article()
                ->name($websiteName)
                ->headline($title)
                ->description($desc)
                ->keywords($keywords)
                ->email('magnificcoding@.com')
                ->url($url)
                ->contactPoint(Schema::ContactPoint()->telephone($tel)->areaServed('Worldwide'))
                ->address(Schema::PostalAddress()->addressCountry('Kenya')->postalCode('254')->streetAddress('688'))
                ->sameAS("http://www.magnificcoding.com")
                ->logo(Schema::ImageObject()->url($logo));
                
        echo $seo->toScript();
        
        return view('user.services.seo_details');
    }
}
