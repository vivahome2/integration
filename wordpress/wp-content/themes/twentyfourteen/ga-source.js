<script>
  var _clientId;
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48400818-1', 'auto', {'userId': 'uid12345'});
  ga(function(tracker){
    _clientId = tracker.get('clientId');
    tracker.send('pageview', {'dimension4': _clientId, 'dimension5': 'uid12345' });
    console.log('No1: _clientId is: ' + _clientId);
  });
  ga('send', 'pageview');
  console.log('No2: _clientId is: ' + _clientId);
</script>

