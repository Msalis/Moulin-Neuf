$(document).ready(function(){
	$("#bookingForm").on("submit",function(e){
		e.preventDefault();

		var t=$(this);

		var n=$("#name").val();
		var f=$("#firstName").val();
		var m=$("#mail").val();
		var nb=$("#nbPersons").val();
		var b=$("#datepickerBegin").val();
		var e=$("#datepickerEnd").val();
		var r=$("#specialReq").val();

		var a=new FormData;

		a.append("name",n);
		a.append("firstName",f);
		a.append("mail",m);
		a.append("nb",nb);
		a.append("begin",b);
		a.append("end",e);
		a.append("requirements",r);

		if(n===""||f===""||m===""||nb===""||b===""||e===""||r===""){

			alert("Veuillez compléter tous les champs")

		}
		else

		{

			$.ajax({

				//url:"controllers/mail.php",

				//type:"POST",

				data:a,

				processData:false,

				contentType:false,

				cache:false,

				dataType:"json",

				success:function(e){

					if(e.reponse=="ok"){

						alert("That's good !")

					}

					else

					{

						alert(String(e.reponse));

					}

				}

			})

		}
	});
});