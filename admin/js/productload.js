
	 function loadedit(val)
      {
          $.ajax({
          type: 'post',
          url: 'edit.php?cat_id='+ val,
          success: function (data) {
          $("#row").html(data);
     }
   });
}

function loadsedit(val)
      {
          $.ajax({
          type: 'post',
          url: 'sedit.php?subcat_id='+ val,
          success: function (data) {
          $("#row").html(data);
     }
   });
}

function loadpedit(val)
      {
          $.ajax({
          type: 'post',
          url: 'pedit.php?p_id='+ val,

          success: function (data) {
          $("#row").html(data);
                                  //console.log(response);
                               //  document.getElementById("block2").innerHTML=response; 
     }
   });
}

function loadbanneredit(val)
      {
          $.ajax({
          type: 'post',
          url: 'banneredit.php?banner_id='+ val,

          success: function (data) {
          $("#row").html(data);
                  //console.log(response);
                  //  document.getElementById("block2").innerHTML=response; 
     }
   });
}

function loadorderedit(val)
      {
          $.ajax({
          type: 'post',
          url: 'orderedit.php',

          success: function (data) {
          $("#row").html(data);
                  //console.log(response);
                  //  document.getElementById("block2").innerHTML=response; 
     }
   });
}

function addcat()
      {
          $.ajax({
          type: 'post',
          url: 'categoryadd.php',

          success: function (data) {
          $("#row").html(data);
                
     }
   });
}

function addsubcat()
      {
          $.ajax({
          type: 'post',
          url: 'scategoryadd.php',

          success: function (data) {
          $("#row").html(data);
                
     }
   });
}

function addproducts()
      {
          $.ajax({
          type: 'post',
          url: 'addproducts.php',

          success: function (data) {
          $("#row").html(data);
                
     }
   });
}

function addbanner()
      {
          $.ajax({
          type: 'post',
          url: 'banneradd.php',

          success: function (data) {
          $("#row").html(data);
                  //console.log(response);
                  //  document.getElementById("block2").innerHTML=response; 
     }
   });
}