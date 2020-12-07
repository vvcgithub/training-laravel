$(function() {
    // this getButton implementation fetches data coming 
    // from the SampleController "sample_get" method
    $("#getButton").on("click", function() {

        $.ajax({
            url:  "/sample_get",
            type: 'GET',
            success: function(data) { 
                console.log(data)
            }
        });
    });

    // this postButton implementation post and request data coming 
    // from the SampleController "sample_post_1" method without CSRF TOKEN
    $("#postButton1").on("click", function() {
        
        let collection = {             
            firstname: "Juan",
            lastname: "Tamad"
        }

        $.ajax({
            url:  "/sample_post1",
            type: 'POST',
            data: collection,
            dataType: 'json',
            success: function(data) { 
                console.log(data)
            }
        });
    });

    // this postButton implementation post and request data coming 
    // from the SampleController "sample_post_1" method with CSRF TOKEN
    $("#postButton2").on("click", function() {
        
        let collection = {             
            firstname: "Juan",
            lastname: "Dela Cruz"
        }

        $.ajax({
            // Try to comment "headers" line to see the output
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:  "/sample_post2",
            type: 'POST',
            data: collection,
            dataType: 'json',
            success: function(data) { 
                console.log(data)
            }
        });
    });    
});