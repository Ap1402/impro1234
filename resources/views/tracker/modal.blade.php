<div class="modal fade" id="trackerInfoModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title mx-auto order-number"></h4> <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
            </div> <!-- Modal body -->
            <div class="modal-body">
                <div class="progress-track">
                    <ul id="progressbar">

                    </ul>
                </div>
                <div class="row">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 details">
                                <div class="details-tracking-title">Compra realizada el </div>
                                <div class="details-tracking-value date_of_purchase"> </div>
                            </div>
                            <div class="col-sm-12 col-md-6 details">
                                <div class="details-tracking-title"> Fecha de llegada estimada </div>
                                <div class="details-tracking-value estimated_date"> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    function getModal() {
        return document.getElementById('trackerInfoModal');
    }

    function createStatusesList(statuses) {
        var htmlForStatuses = ''
        for (var i = 0; statuses.length > i; i++) {
            htmlForStatuses += '<li class="step0 step">' + statuses[i].status + '</li>'
        }
        return htmlForStatuses
    }

    var myModal = new bootstrap.Modal(getModal())

    var trackingModalForm = document.getElementById('trackingModalForm')
    var trackingModalInvalidFeedback = document.getElementsByClassName('trackingInputInvalidFeedback')

    trackingModalForm.addEventListener('submit', async function(event) {
        var trackingNumberInputField = document.getElementById("trackingInput");
        event.preventDefault();
        var trackingNumber = trackingNumberInputField.value;
        try {
            if (trackingNumber.length === 0) {
                throw new Error('Por favor ingrese un número de orden válido')
            }
            const responseTracking = await fetch('http://192.168.1.211:8000/api/tracking/' +
                trackingNumber);
            const responseStatuses = await fetch('http://192.168.1.211:8000/api/tracking/statuses');

            const dataTracking = await responseTracking.json();
            const dataStatuses = await responseStatuses.json();

            if (dataTracking.length === 0) {
                throw new Error('No se ha encontrado una orden con este número')
            }

            getModal().querySelector('.modal .order-number').innerText =
                `Orden ${dataTracking[0].num_order}`
            getModal().querySelector('.modal .date_of_purchase').innerText = dataTracking[0]
                .date_of_purchase
            getModal().querySelector('.modal .estimated_date').innerText = dataTracking[0].estimated_date
            getModal().querySelector('.modal #progressbar').innerHTML = createStatusesList(dataStatuses)

            trackingNumberInputField.classList.remove('is-invalid')
            trackingNumberInputField.classList.add('is-valid')
            console.log(dataTracking)
            console.log(dataStatuses)
            myModal.show()
        } catch (err) {
            trackingNumberInputField.classList.add('is-invalid')
            trackingModalInvalidFeedback[0].innerText = err.message
            console.log(err.message)
        }
    })

</script> --}}

<script>
    function getModal() {
        return document.getElementById('trackerInfoModal');
    }

    function createStatusesList(statuses, actualStatus) {
        var htmlForStatuses = ''
        for (var i = 0; statuses.length > i; i++) {
            if (actualStatus === statuses[i].gb_status_id) {
                htmlForStatuses += '<li class="step0 step active text-center">' + statuses[i].status + '</li>'
            } else {
                htmlForStatuses += '<li class="step0 step text-center">' + statuses[i].status + '</li>'
            }
        }
        return htmlForStatuses
    }

    var myModal = new bootstrap.Modal(getModal())

    var trackingModalForm = document.getElementById('trackingModalForm')
    var trackingModalInvalidFeedback = document.getElementsByClassName('trackingInputInvalidFeedback')

    trackingModalForm.addEventListener('submit', async function(event) {
        var trackingNumberInputField = document.getElementById("trackingInput");
        event.preventDefault();
        var trackingNumber = trackingNumberInputField.value;
        try {
            if (trackingNumber.length === 0) {
                throw new Error('Por favor ingrese un número de orden válido')
            }
            const responseTracking = await fetch('http://localhost:8000/api/tracking/' + trackingNumber);
            const responseStatuses = await fetch('http://localhost:8000/api/tracking/statuses');

            const dataTracking = await responseTracking.json();
            const dataStatuses = await responseStatuses.json();

            if (dataTracking.length === 0) {
                throw new Error('No se ha encontrado una orden con este número')
            }

            getModal().querySelector('.modal .order-number').innerText =
                `Orden ${dataTracking[0].num_order}`
            getModal().querySelector('.modal .date_of_purchase').innerText = dataTracking[0]
                .date_of_purchase
            getModal().querySelector('.modal .estimated_date').innerText = dataTracking[0].estimated_date
            getModal().querySelector('.modal #progressbar').innerHTML = createStatusesList(dataStatuses,
                dataTracking[0].status_id)

            trackingNumberInputField.classList.remove('is-invalid')
            trackingNumberInputField.classList.add('is-valid')
            myModal.show();
        } catch (err) {
            trackingNumberInputField.classList.add('is-invalid')
            trackingModalInvalidFeedback[0].innerText = err.message
        }
    })

</script>
