<script type="text/javascript">
var array = [33, 103, 3, 726, 200];


function bs(a)

{

    var swapped;

    do {

        swapped = false;

        for (var i=0; i < a.length-1; i++) {

            if (a[i] > a[i+1]) {

                var temp = a[i];

                a[i] = a[i+1];

                a[i+1] = temp;

                swapped = true;

            }

        }

    } while (swapped);

}



console.log(array);

</script>