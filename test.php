 <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=500,height=500');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
            }
 </script>

 <div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
  	<p>Print this</p>
  </div>
</div>

<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>