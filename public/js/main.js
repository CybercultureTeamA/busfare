$(document).ready(function(){
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        auto:true,
        onSliderLoad:function(){
            $('#autoWidth').removeClass('cS-hidden')
        }
    });
});
$(document).ready(function(){
    $('#toggle-out-comment').click(function(){
    	$('#top-fixed-comment').css('visibility','hidden');
      });
});
$(document).ready(function(){
    $('#addComent').click(function(){
    	$('#top-fixed-comment').css('visibility','hidden');
      });
});

$(document).ready(function(){
    $('#fixed-coment-toggler').click(function(){
      $('#top-fixed-comment').css('visibility','visible');
      });
});

function render(data){
    var html = '<div class="comentBox"><div class="leftPanelImg"><img src="img/logo.jpg" class="img-responsive" id="user-img1" /></div><div class="coment-header-sec"><span>'+data.name+' </span><p>A client</p></div></span><div class="coment-body"><p>'+data.body+'</p></div><div class="clear"></div></div>';
    $('#container').append(html);
}
$(document).ready(function(){
    var coment = [];
    if(!localStorage.comentData){
        localStorage.comentData = [];
    }else{
        coment = JSON.parse(localStorage.comentData);
    }

        for(var i=0;i<coment.length;i++){
            render(coment[i]);
    }
    $('#addComent').click(function(){
        var addObj = {
         "name": $('#name').val(),
        "body": $('#bodyText').val()
        };
        coment.push(addObj);
        localStorage.comentData = JSON.stringify(coment);
        render(addObj);
        $('#name').val('');
        $('#bodyText').val('');
    });
});
var pwd = document.getElementById('pwd');//This is to show password
  var eye = document.getElementById('eye');

  eye.addEventListener('click',togglePass);

  function togglePass(){
    eye.classList.toggle('active');

    (pwd.type == 'password') ? pwd.type = 'text':
    pwd.type = 'password'; 
  }
   var cpwd = document.getElementById('c-pwd');//This is to show confirm password
  var ceye = document.getElementById('c-eye');

  ceye.addEventListener('click',togglecPass);

  function togglecPass(){
    ceye.classList.toggle('active');

    (cpwd.type == 'password') ? cpwd.type = 'text':
    cpwd.type = 'password'; 
  }