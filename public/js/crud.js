$(function(){
    ('#btn-save').on("click",function(){
      var answer = $('#answer').val();
      var ques_id = $('#ques_id').val();
      var user_id = $('#user_id').val();
      
      $.ajax({
        url   : "<?= URL::to('answer/store')?>",
        type  : "POST",
        async : false,
        data  : {
                'answer' :answer,
                'ques_id':ques_id,
                'user_id':user_id

        },
        success:function(re){
          if(re==0){
          alert(re);
        }
        else
          alert(1);
        }

      });
    });
  });