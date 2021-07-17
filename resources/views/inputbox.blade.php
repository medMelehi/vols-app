<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>ComboTree jQuery Plugin Demos by Erhan FIRAT</title>
	<link href="{{ asset('css/jquerysctipttop.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/comboTreePlugin.js') }}"  type="text/javascript"></script>

</head>
<body>



<div class="container">
	<div class="row">	
    	<div class="col-lg-6">
			<input type="text" id="justAnInputBox1" placeholder="Select" autocomplete="off"/>
		</div>
	</div>
</div>





<script type="text/javascript">

var SampleJSONData = [
    {
        id: 0,
        title: 'Horse'
    }, {
        id: 1,
        title: 'Birds',
		isSelectable: false,
        subs: [
            {
                id: 10,
                title: 'Pigeon',
				isSelectable: false
            }, {
                id: 11,
                title: 'Parrot'
            }, {
                id: 12,
                title: 'Owl'
            }, {
                id: 13,
                title: 'Falcon'
            }
        ]
    }, {
        id: 2,
        title: 'Rabbit'
    }, {
        id: 3,
        title: 'Fox'
    }, {
        id: 5,
        title: 'Cats',
        subs: [
            {
                id: 50,
                title: 'Kitty'
            }, {
                id: 51,
                title: 'Bigs',
                subs: [
                    {
                        id: 510,
                        title: 'Cheetah'
                    }, {
                        id: 511,
                        title: 'Jaguar'
                    }, {
                        id: 512,
                        title: 'Leopard'
                    }
                ]
            }
        ]
    }, {
        id: 6,
        title: 'Fish'
    }
];
var SampleJSONData2 = [
    {
        id: 1,
        title: 'Four Wheels',
		subs: [
			{
				id: 10,
				title: 'Car'
			}, {
				id: 11,
				title: 'Truck'
			}, {
				id: 12,
				title: 'Transporter'
			}, {
				id: 13,
				title: 'Dozer'
			}
		]
    }, {
        id: 2,
        title: 'Two Wheels',
        subs: [
            {
                id: 20,
                title: 'Cycle'
            }, {
                id: 21,
                title: 'Motorbike'
            }, {
                id: 22,
                title: 'Scooter'
            }
        ]
    }, {
        id: 2,
        title: 'Van'
    }, {
        id: 3,
        title: 'Bus'
    }
];


var comboTree1, comboTree2;

jQuery(document).ready(function($) {

	
		
		comboTree3 = $('#justAnInputBox1').comboTree({
			source : SampleJSONData,
			isMultiple: true,
			cascadeSelect: true,
			collapse: false
		});

		comboTree3.setSource(SampleJSONData2);


	
});


</script>
</body>
</html>
