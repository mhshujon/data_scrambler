$("button").click(function(){
    const buttonID = '#' + this.id;
    let postData = [];
    const task = $(buttonID).val();
    if ('seed' == task || 'view' == task) {
        postData = {'task': task};
    } else if('edit' == task){
        postData = {
            'task': task
        };
    }
    $.ajax({
        url: 'crud/functions/dataProcess.php',
        type: 'POST',
        data: postData,
        success: function (data){
            if(data) {
                $("#displayTable").html(data)
                // alert(data);
            }else {
                // alert(data);
            }
        }
    })
});

$("#keyGen").click(function(){
    let task = $("#keyGen").val();
    
    $.ajax({
        url: 'crud/functions/dataProcess.php',
        type: 'POST',
        data: task,
        success: function (response){
            if(response) {
                $("#newKey").html(response);
            }else {
                alert('Key generation failed!');
            }
        }
    })
});