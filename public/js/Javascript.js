$(document).ready(function(){

    var DIRPAGE = "http://"+document.location.hostname+":6186/mvc/";
    console.log(DIRPAGE);

    $('#FormSelect').on('submit',function(event){
        event.preventDefault();
        var Dados=$(this).serialize();
    
        $.ajax({
            url: DIRPAGE+'cadastro/seleciona',
            method:'post',
            dataType:'html',
            data: Dados,
            success:function(Dados){
                $('.Resultado').html(Dados);
            }
        });
    });

    $(document).on('click','.ImageEdit',function(){
        var ImgRel = $(this).attr('rel');
        // console.log(ImgRel);
        
        // console.log(DIRPAGE + 'cadastro/puxarDB/'+ImgRel);
        $.ajax({
            url: DIRPAGE + 'cadastro/puxarDB/'+ImgRel,
            method:'post',
            dataType:'html',
            data: {'Id':ImgRel},
            success:function(data){
                $('.ResultadoFormulario').html(data);
            }
        });
    });

});