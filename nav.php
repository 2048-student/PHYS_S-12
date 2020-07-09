<nav>
    <ul>
        <li id="navaboutme"><a href="index.php">about me</a></li>
        <li id="navproposal"><a href="proposal.php">final project proposal</a></li>
        <li id="navclassi"><a href="classi.php">01: intro/documenting</a></li>
        <li id="navclassii"><a href="classii.php">02: 2D design/cutting</a></li>
        <li id="navclassiii"><a href="classiii.php">03: electronics/tools</a></li>
        <li id="navclassiv"><a href="classiv.php">04: rapid prototyping</a></li>
        <li id="navclassv"><a href="classv.php">05: programmable electronics</a></li>
        <li id="navclassvi"><a href="classvi.php">06: 3D design/cutting</a></li>
        <li id="navclassvii"><a href="classvii.php">07: electronic input devices</a></li>
        <li id="navclassviii"><a href="classviii.php">08: electronic output devices</a></li>
        <li id="navclassix"><a href="classi.php">09: networking/loT</a></li>
        <li id="navclassx"><a href="classx.php">10: machine building</a></li>
        <li id="navclassxi"><a href="classx.php">11: computer programming</a></li>
        <li id="navfinalproject"><a href="finalproject.php">final project</a></li>
    </ul>
</nav>
<script>
    $(document).ready(function(){
  var mybodyid = $('body').attr('id');
  var mynavid = '#nav' + mybodyid;
  $(mynavid).attr('id','iamhere');
});
</script>
