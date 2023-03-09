function increaseCount(a, b) {
  var input = b.previousElementSibling;
  var value = parseInt(input.value, 10); 
  value = isNaN(value)? 0 : value;
  value ++;
  input.value = value;
}

function decreaseCount(a, b) {
  var input = b.nextElementSibling;
  var value = parseInt(input.value, 10); 
  if (value > 1) {
    value = isNaN(value)? 0 : value;
    value --;
    input.value = value;
  }
}

function manage_cart(pid,type){
  if(type=='update'){
    var qty=jQuery("#"+pid+"qty").val();
  }
  else{
    var qty=jQuery("#qty").val();
  }
  
  jQuery.ajax({
    url:'manage_cart.php',
    type:'post',
    data:'pid='+pid+'&qty='+qty+'&type='+type,
    success:function(result){
      if(type=='update' || type=='remove'){
        window.location.href=window.location.href;
      }
      jQuery('.htc__qua').html(result);
    } 
  }); 
}


// let count = document.getElementById('count');
// count.addEventListener("click" , function(e){

//   let qty = document.getElementById('qty');
//   let notes = localStorage.getItem("notes");

//   if(notes == null){
//     notesObj = [];
//   }

//   else{
//     notesObj = JSON.parse(notes);
//   }

//   notesObj.push(qty.value);
//   localStorage.setItem("notes" , JSON.stringify(notesObj));
//   console.log(notesObj);

// })

// let count1 = document.getElementById('count1');
// count1.addEventListener("click" , function(e){

//   let qty = document.getElementById('qty');
//   let notes = localStorage.getItem("notes");

//   if(notes == null){
//     notesObj = [];
//   }

//   else{
//     notesObj = JSON.parse(notes);
//   }

//   notesObj.push(qty.value);
//   localStorage.setItem("notes" , JSON.stringify(notesObj));
//   console.log(notesObj);

// })
// var iqty = Number(document.getElementById('iqty').value);
// var iprice = Number(document.getElementById('iprice').value);
// var itotal = document.getElementById('itotal');

// function subTotal()
// {
//   for(i=0;i<iprice.length;i++)
//   {
//     itotal[i].values=(iprice[i])*(iqty[i]);
//   }
// }

// subTotal();