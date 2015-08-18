<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->title; ?></title>
        <script type="text/javascript" src="http://maricelweb.com/currencyfair/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="http://maricelweb.com/currencyfair/js/canvasjs/canvasjs.min.js"></script>
        
         <script type="text/javascript">
            window.onload = function () {
              var chart = new CanvasJS.Chart("chartContainer",
              {
                title:{
                  text: "<?php echo $this->title; ?>"    
                },
                animationEnabled: true,
                axisY: {
                  title: "<?php echo $this->side_title; ?>"
                },
                legend: {
                  verticalAlign: "bottom",
                  horizontalAlign: "center"
                },
                theme: "theme2",
                data: [

                {        
                  type: "pie",  
                  showInLegend: false, 
                  legendMarkerColor: "grey",
                  dataPoints: [   
                      <?php 
                        $total = count($this->volumes);
                        $i = 1;
                        foreach($this->volumes as $volume){
                            $comma = ($i==$total)?'':',';
                            $label = $volume->currencyFrom.' -> '.$volume->CurrencyTo;
                            echo "{y:$volume->total, label: '{$label}'}".$comma;
                            
                            $i++;
                        }
                      ?>       
                  ]
                }   
                ]
              });

              chart.render();
  }
  </script>
    </head>
    <body>
        <?php

        ?>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </body>
</html>
