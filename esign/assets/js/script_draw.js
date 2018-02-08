(function () {

    $(function () {

        var signatureOptions = {
            background: '#ffffe9',
            guideline: true,
            guidelineOffset: 30,
            syncField: '#signature',
            syncFormat: 'PNG'
        };
        var $signatureElement = $("#signature-canvas");

        $signatureElement.signature(signatureOptions);

        $(window).resize(function(){
            var data = $signatureElement.signature('toJSON');
            var isEmpty = $signatureElement.signature('isEmpty');

            $signatureElement.signature('destroy');
            $signatureElement.signature(signatureOptions);
            if(!isEmpty){
                $signatureElement.signature('draw', data);
            }
        });

        $("#clear-canvas").click(function(){
            $signatureElement.signature('clear');
            $("#signature").val("");
        })

    });

}());