@php
  $arman=['arman','rehamn','mohamad','farid'];
@endphp
@verbatim
  {{data1}}
@endverbatim
<script>

  // var data=@json($arman);
var data={{Js::from($arman)}};

  data.forEach(function(entry) {
    console.log(entry);
  });
  // console.log(data);
  var data1="arman";
</script>