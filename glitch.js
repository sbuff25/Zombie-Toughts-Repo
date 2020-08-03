$(document).ready(function(){
    flag = 0;
    $('.menuIcon').click(function(){
        if (flag==0){
            $('.open').hide();
            $('.close').show();
            flag=1;
        }
        else{
            $('.open').show();
            $('.close').hide();
            flag=0;
        }
    });
});