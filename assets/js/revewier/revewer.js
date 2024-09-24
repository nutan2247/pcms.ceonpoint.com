$(document).on("click","#revewier_accept",function(){


	var reviewer_id = $("#reviewer_id").val();
	var certificate_id = $(this).attr('data-id');

$.ajax({

        url:base_url+'reviewer/reviewer/reviewer_accept',
        type:'post',
        data:{reviewer_id,certificate_id},
        beforeSend:function()
        {
          $(".revewier_accept").html('WAIT...');
          $(".revewier_accept").prop('disabled',true);

        },
        success:function(data){

          $("#revewier_accept").text("Accepted");
        
        }

    });

});

/******************************** reviewer accept ce-provider ********************************/

$(document).on("click",".ce_provider_revewier_accept",function(){


  var reviewer_id = $("#reviewer_id").val();
  var provider_id = $(this).attr('data-id');
  var payment_id = $(this).attr('id');

$.ajax({

        url:base_url+'reviewer/reviewer/reviewer_accept_ce_provider',
        type:'post',
        data:{reviewer_id,provider_id},
        beforeSend:function()
        {
          $(".revewier_accept").html('WAIT...');
          $(".revewier_accept").prop('disabled',true);

        },
        success:function(data){
          console.log(data);
          $("#"+payment_id).css('display',"none");
          $("#reviewerName_"+provider_id).text(reviewerName);
          //$("#ce_provider_status_"+payment_id).text("Approved");
        
        }

    });

});