<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<?php include 'inc/html-top.inc' ;?> 

<body>

    <?php include 'inc/nav.inc' ;?>

    <main>
        <div class="container">  
			<div class="table-responsive"> 

                <h3> Survey Results</h3>

				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
        <p><a href="logout.php">Log Out </a></p>
    </main>
</body>  

</html> 


<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
            fetch_data();
            $(document).on('click', '#btn_add', function() {
                var name = $('#name').text();
                var email = $('#email').text();
                var phone = $('#phone').text();
                var pet = $('#pet').text();
                var year = $('#year').text();

                if (name == '') {
                    alert("Enter A Name");
                    return false;
                }
                if (email == '') {
                    alert("Enter An Email");
                    return false;
                }
                if (phone == '') {
                    alert("Enter a Phone Number");
                    return false;
                }
                if (pet == '') {
                    alert("Enter a Pet type");
                    return false;
                }

                if (year == '') {
                    alert("Enter a Duration");
                    return false;
                }
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        pet: pet,
                        year: year
                    },
                    dataType: "text",
                    success: function(data) {
                        alert(data);
                        fetch_data();
                    }
                })
            });

            function edit_data(id, text, column_name) {
                $.ajax({
                    url: "includes/edit.php",
                    method: "POST",
                    data: {
                        id: id,
                        text: text,
                        column_name: column_name
                    },
                    dataType: "text",
                    success: function (data) {
                        //alert(data);
                        $('#result').html("<div class='alert alert-success'>" + data + "</div>");
                    }
                });
            }
            $(document).on('blur', '.name', function () {
                var id = $(this).data("id1");
                var name = $(this).text();
                edit_data(id, name, "name");
            });
            $(document).on('blur', '.email', function () {
                var id = $(this).data("id2");
                var email = $(this).text();
                edit_data(id, email, "email");
            });
            $(document).on('blur', '.phone', function () {
                var id = $(this).data("id3");
                var phone = $(this).text();
                edit_data(id, phone, "phone");
            });
            $(document).on('blur', '.pet', function () {
                var id = $(this).data("id4");
                var pet = $(this).text();
                edit_data(id, pet, "pet");
            });

            $(document).on('blur', '.year', function () {
                var id = $(this).data("id5");
                var year = $(this).text();
                edit_data(id, year, "year");
            });

            $(document).on('click', '.btn_delete', function () {
                var id = $(this).data("id6");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "delete.php",
                        method: "POST",
                        data: {
                            id: id
                        },
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            fetch_data();
                        }
                    });
                }
            });
        });
    </script>