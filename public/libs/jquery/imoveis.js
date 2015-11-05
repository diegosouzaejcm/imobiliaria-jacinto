$(document).ready(
    function() {
        $(".reservar").click(
            function () {
                $(this).css("display","none");
                console.log('foi!');
                var imovel = $(this).attr('imovel');
                $.ajax({
                    url: 'usuario/imoveis_user',
                    method:'post',
                    dataType: 'json',
                    data:{
                        id: imovel
                    },
                    success: function(data){
                        alert(data.message);
                    },
                    error: function(){
                        alert("Imóvel reservado com sucesso");
                    }
                });
            }
        );
    }
);