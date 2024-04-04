<?php

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';    
        
        $sitemap .= '<url>';
        $sitemap .= '<loc>https:/www.evector.biz/</loc>';
        $sitemap .= '<lastmod>'.date("Y-m-d").'</lastmod>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';
        
        $sitemap .= '<url>';
        $sitemap .= '<loc>https:/www.evector.biz/about.php</loc>';
        $sitemap .= '<lastmod>'.date("Y-m-d").'</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.9</priority>';
        $sitemap .= '</url>';
        
        $sitemap .= '<url>';
        $sitemap .= '<loc>https:/www.evector.biz/services.php</loc>';
        $sitemap .= '<lastmod>'.date("Y-m-d").'</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.8</priority>';
        $sitemap .= '</url>';
        
        $sitemap .= '<url>';
        $sitemap .= '<loc>https:/www.evector.biz/portfolio.php</loc>';
        $sitemap .= '<lastmod>'.date("Y-m-d").'</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.7</priority>';
        $sitemap .= '</url>';
        
        $sitemap .= '<url>';
        $sitemap .= '<loc>https:/www.evector.biz/contact.php</loc>';
        $sitemap .= '<lastmod>'.date("Y-m-d").'</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.6</priority>';
        $sitemap .= '</url>';
        
        $sitemap.='</urlset>';
        
        try{
            file_put_contents("/var/www/evector.biz/sitemap3.xml", $sitemap);
            echo "Updated";
        }
        catch(\Exception $e){
            echo "file_put_contents(/var/www/services1/public/sitemap.xml): failed to open stream: Permission denied";
        } 

