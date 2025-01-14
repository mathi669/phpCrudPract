$(document).ready(function () {
    loadEmmployees();
    
    $(document).on('click', '#addEmployeeBtn', function(){
        const name = $('#name').val();
        const email = $('#email').val();
        const position = $('#position').val();
        const salary = $('#salary').val();

        $.ajax({
            url: './controllers/create.php',
            type: 'POST',
            data:{
                name: name,
                email: email,
                position: position,
                salary: salary
            },
            success: function(response){
                $('#addModal').modal('hide');
                loadEmmployees();
                $('#employeeForm')[0].reset();
            }
        });
    });



    function loadEmmployees(){
        $.ajax({
            url: './controllers/read.php',
            type: 'GET',
            success: function(response){
                $('#employeeTable').html(response);
            }
        });
    }
});