function contact() {
    var name = $('#gstname').val();
    var email = $('#gstemail').val();
    var subject = $('#gstsubject').val();
    var message = $('#gstmsg').val();

    $.ajax({
        url: 'insert.php',
        method: 'POST',
        dataType: 'json',
        data: {
            action: 'check-insert',
            name: name,
            email: email,
            subject: subject,
            msg: message,
        }, success: function (data) {
            if (data == "ok") {
                alert("Data Stored");
            } else if (data == "failed") {
                alert("Data Not stored");
            }
        }, error: function (data) {
            alert("Fill All Your Fields");
        }
    })
}

// Guide Insert Data 

// $("#msginsert").click(function(e){
//     e.preventDefault();
//  //    console.log("msg insert button clicked");
//     var gname =$("#gstname").val();
//     var gemail =$("#gstemail").val();
//     var gsubject =$("#gstsubject").val();
//     var gmsg =$("#gstmsg").val();
//  //    console.log(gname);
//  //    console.log(gemail);
//  //    console.log(gsubject);
//  //    console.log(gmsg);
// //  mydata={name:gname,email:gemail,subject:gsubject,msg:gmsg};

//  $.ajax({
//      action:'insert_data',
//      url:'insert1.php',
//      method:'POST',
//      datatype:'JSON',
//      data:{
//         name:gname,
//         email:gemail,
//         subject:gsubject,
//         msg:gmsg,

//      },
//      success:function(data){
//         if(data == "ok"){
//             alert("Data stored");
//         }else if(data == "failed"){
//             alert("Data not stored");
//         }
//     },error:function(data){
//         alert("Data can't send to php file");
//     }

//  });
// });


function hire() {

    var hname = $('#hname').val();
    var hemail = $('#hemail').val();
    var haddress = $('#haddress').val();
    var hcity = $('#hcity').val();
    var hzip = $('#hzip').val();
    var hphone = $('#hphone').val();
    var hdate = $('#hdate').val();
    console.log(hname);
    console.log(hemail);
    console.log(haddress);
    console.log(hcity);
    console.log(hzip);
    console.log(hphone);
    console.log(hdate);
    $.ajax({
        url: 'insert.php',
        method: 'POST',
        datatype: 'json',
        data: {
            action: 'tourist',
            hname: hname,
            hemail: hemail,
            haddress: haddress,
            hcity: hcity,
            hzip: hzip,
            hphone: hphone,
            hdate: hdate,
        }, success: function (data) {
            if (rate == "ok") {
                alert("Data stored");
            } else if (rate == "failed") {
                alert("Data not stored");
            }
        }, error: function (data) {
            alert("Data can't send to php file");
        }
    })
}

function signup() {

    var sname = $('#sname').val();
    var semail = $('#semail').val();
    var spassword = $('#spassword').val();
    var scpassword = $('#scpassword').val();
    var sdob = $('#sdob').val();
    var scontact = $('#scontact').val();

    $.ajax({
        url: 'insert.php',
        method: 'POST',
        dataype: 'json',
        data: {
            action: 'signup',
            sname:sname,
            semail: semail,
            spassword: spassword,
            scpassword: scpassword,
            sdob: sdob,
            scontact: scontact,
        }, success: function(data) {
            if (data == "oky") {
                alert("Data Successfully Added");
                location.href = "http://localhost/Tourimo"
            } else if (data == "failed") {
                alert("Some Error Occurred");
            }
        },error: function(data){
            alert("Connection Failed");
        }
    })
}
function signin(){
    var useremail= $('#useremail').val();
    var userpass= $('#userpass').val();

    $.ajax({
        url:'check.php',
        method:'POST',
        datatype:'JSON',
        data:{
            action:'login',
            useremail:useremail,
            userpass:userpass,
        }, beforesend:function(){
            $('#LogIn').val("Signing In ..");
        },
        success: function(data) {
            if(data == "oky"){
                alert ("Welcome Back !");
                $("#body").load("index.php").hide().fadein(1500);
            } else if (data == "failed"){
                alert("Wrong Details");
            }
        },error: function(data){
            alert("Connection Failed");
        }
    })
}




// SignIn Form Pop Up 

document.getElementById('signin').addEventListener('click', function () {
    document.querySelector('.bg-modal').style.display = 'flex';
});
document.getElementById('close').addEventListener('click', function () {
    document.querySelector('.bg-modal').style.display = 'none';
});


//    SignUp Form Pop Up 
document.getElementById('signup').addEventListener('click', function () {
    document.querySelector('.bg-modal1').style.display = 'flex';
});
document.getElementById('close1').addEventListener('click', function () {
    document.querySelector('.bg-modal1').style.display = 'none';
});


// ................End Sign open close ............... 