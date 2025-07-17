// 1° forma 
// $(document).ready(function() {
    
    // function teste() {
    //     console.log($('#exemplo'));
    // }
// });


// 2° forma: 2 jeitos de se fazer
    // function teste() {
    //     console.log($('#exemplo'));
    // }

    // $(teste());

// ou:

    $(function () { // <- obs: É necessário que a function seja anônima.
        console.log($('#exemplo'));
    });