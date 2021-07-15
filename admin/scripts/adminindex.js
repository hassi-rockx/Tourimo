function adminlog(){
    var adminname = $('#adminname').val();
    var adminpass = $('#adminpass').val();
    $.ajax({
        url:'admincheck.php',
        method:'POST',
        datatype:'JSON',
        data:{
            action:'adlogin',
            adminname:adminname,
            adminpass:adminpass, 
        },success:function(log){
            if(log == 'yes'){
                alert("data fetched");
                setTimeout(()=>{
                    window.location.href='http://localhost/Tourimo/admin/index.php';
                }, 2000);
            }else if(log == "no"){
                alert("Data Not fetched");
            }
        },error:function(log){
            alert("Data Cant Sent to Insert File");
        }
    })
}