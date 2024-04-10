<?php
    $title = "Portfolio";
    $description ="E Vector Networking Inc. is a professional web development firm. We specialize in web development, SEO, QA, Intenet Marketing";
    $keywords = "web developement, web design, Internet Marketing, SEO, automatic web data collection, Quality Assurance, Artificial Intelegence Solutions, Mobile Development";
    
    include('header.php');

    $dir = $_SERVER['DOCUMENT_ROOT'].'/port/new3/';

    $imgs = scandir($dir, SCANDIR_SORT_DESCENDING);

    unset($imgs[16]);
    unset($imgs[17]);

    // print_r($imgs);

    // exit;

    // $imgs = [
    //     'port/new/apen.png',
    //     'port/new/exact.png',
    //     'port/new/apcon.png',
    //     'port/new/ap.png',
    //     'port/new/com.png',
    //     'port/new/kids.png',
    //     'port/new/nissan.png',
    //     'port/new/preg.png',
    //     'port/new/redtag.png',
    //     'port/new/repair.png',
    //     'port/new/soft.png',
    //     'port/new/sus.png',
    // ];
    

?>      
          <div class="row">
            <div class="span8">
              <h1>Latest Projects</h1>
            </div>
            <div class="span4">
              <div class="actual-section" style="height: 0px;">
                <a href="index.php">Home</a> > Portfolio
              </div>  
            </div>
          </div>     
      	<section class="row" id="portfolio-items">
            <ul class="portfolio">
              <!---->
              <?php

                //print_r($imgs);
                unset($imgs[0]);
                unset($imgs[18]);
              
                foreach($imgs as $cur): 
                
                $url = str_replace(".png", "", $cur);
                
              ?>
                <li>
                  <article class="span3 project" data-tags="photography">     
                    <a class="plink" href="#myModal" simg="port/new3/<?=$cur;?>" data-toggle="modal">
                      <div class="square-1" style="text-align: center;">
                        <div class="img-container">
                          <img src="port/new3/<?=$cur;?>" alt=""/><br>
                          
                          <div class="img-bg-icon"></div>
                        </div>
                        <!-- <a href="http://<?=$url;?>" onclick="window.open(this.href, 'mywin', 'left=40,top=40,width=1000,height=700,toolbar=1,resizable=1'); return false;"><b><?=$url;?></b></a> -->
                        <a href="http://<?=$url;?>" target="_blank"><b><?=$url;?></b></a>
                      </div>
                    </a>
                  </article>
                </li>
              
              <?php endforeach; ?>

            </ul>
        </section>  
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!--  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>-->
  <div class="modal-body">
      <p><img id="modal_img" src=""></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<! -- End Modal -->
 <script>

$(document).ready(function(){
    $("#lportfolio").addClass("active");
    
    $(".plink").click(function(){
        
        console.log($(this).attr("simg"));
        $("#modal_img").attr("src", $(this).attr("simg"));
    });
});

</script>

<?php

    include('footer.php');
    
?>

