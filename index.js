  $(document).ready(function()
     {
        $('[data-toggle="tooltip"]').tooltip();
        


    $(".img-thumbnail").click(function(){
         let  path = $(this).attr("src");
       $("#main1").attr("src",path);
    });




// used in product detail

$("#addtocart").click(function(){
   alert("item added");
});

$("#addtowishlist").click(function(){
   alert("item added in wislist");
});

$("#submit1").click(function(){
    alert("data submited");
});



// live update for corona 

     init()
          function init(){
            var url="https://api.covid19api.com/summary";

            var data = "";

            $.get(url,function(data){
                console.log(data.Global);

                data = `
                <td>${data.Global.TotalConfirmed}</td>
                <td>${data.Global.TotalDeaths}</td>
                <td>${data.Global.TotalRecovered}</td>

               `
              $("#main").html(data);
            });
        }











// live update corona virus



// function fetch(){
//     $.get("https://api.covid19api.com/summary",

//         function (data){
//             console.log(data['Countries'].length);

            // var  tbval = document.getElementById('tbval');
            //  for(var 1=i; i<(data['Countries'].length); i++){
            //     var x =tbval.insertRow();

            //     x.insertCell(0);
            //     tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
            //     tbval.rows[i].cells[0].style.background ='#7a4a91';
            //     tbval.rows[i].cells[0].style.color ='#fff';


            //     x.insertCell(1);
            //     tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['NewConfirmed'];
            //     tbval.rows[i].cells[1].style.background ='#4bb7d8';

            //     x.insertCell(2);
            //     tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalConfrimed'];
            //     tbval.rows[i].cells[2].style.background ='#4bb7d8';

            //      x.insertCell(3);
            //     tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['NewDeaths'];
            //     tbval.rows[i].cells[3].style.background ='#f36e23';

            //      x.insertCell(4);
            //     tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['TotalDeaths'];
            //     tbval.rows[i].cells[4].style.background ='#4bb7d8';

            //      x.insertCell(5);
            //     tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
            //     tbval.rows[i].cells[5].style.background ='#9cc850';

            //      x.insertCell(6);
            //     tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['TotalRecovered'];
            //     tbval.rows[i].cells[6].style.background ='#f36e23';

            //     x.insertCell(7);
            //     tbval.rows[i].cells[7].innerHTML= data['Countries'][i-1]['Date'];
            //     tbval.rows[i].cells[7].style.background ='#f36e23';
            //  }



// admin jquery


   });