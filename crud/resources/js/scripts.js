$("button").click(function(){
    const buttonID = '#' + this.id;
    let postData = [];
    let task = $(buttonID).val();
    postData = {'task': task};
    if ('seed' == task || 'view' == task) {
        $("#addNewForm").css("display", "none");
        postData = {'task': task};
        $.ajax({
            url: 'crud/functions/dataProcess.php',
            type: 'POST',
            data: postData,
            success: function (data){
                // alert(postData['task'])
                if(data) {
                    $("#displayTable").html(data);
                    $("#tableView").css("display", "block");
                    // alert(data);
                }else {
                    // alert(data);
                }
            }
        })
    } else if('add' == task){
        $("#tableView").css("display", "none");
        $("#addNewForm").css("display", "block");
    } else if('submit' == task){
        postData = {
            'task': task,
            'firstName': $("#fname").val(),
            'lastName': $("#lname").val(),
            'roll': $("#roll").val()
        };
        $.ajax({
            url: 'crud/functions/dataProcess.php',
            type: 'POST',
            data: postData,
            success: function (data){
                alert(postData['task'])
                if(data) {
                    $("#displayTable").html(data)
                    // alert(data);
                }else {
                    // alert(data);
                }
            }
        })
        $("#addNewForm").css("display", "none");
    }
    
});