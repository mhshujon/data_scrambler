$("#resultButton").click(function(){
    let task = ($("input:radio[name=task]:checked").val());
    let userInputKey = $("#userInputKey").val();
    let iData = $("#iData").val();

    $.ajax({
        url: 'functions/dataProcess.php',
        type: 'POST',
        data: {
            'resultButtonClicked': 'yes',
            'task': task,
            'userInputKey': userInputKey,
            'iData': iData
        },
        success: function (response){
            if(response) {
                $("#resultField").val(response)
            }else {
                alert('Encoding/Decoding failed!');
            }
        }
    })
});

$("#keyGen").click(function(){
    let task = $("#keyGen").val();
    
    $.ajax({
        url: 'functions/dataProcess.php',
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