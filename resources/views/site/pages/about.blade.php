@include('layouts.main')


<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <section class="clear">
      <h1>About Us</h1>
      <div class="two_third first">
        <p>This is a voluntary blood donors' organization.
          Our Journey was started from Dhaka University in 1997 to make voluntary fresh blood donation as a Social Movement.</p>
        <p>It is totally non-political, non-communal, non-regional, non-racial, secular and voluntary social organization.</p>
        <p>Initiating social movement to build up a healthy society through motivating voluntary blood donation, donating blood voluntarily and others services and awareness programs.</p>
        <p>Motivating Students and Young generation of Bangladesh to donate blood voluntarily. Free blood group test. Donating blood voluntarily for patients. Motivating people for voluntary blood donation and taking part in service and awareness program. Taking relief and rehabilitation programs to overcome natural and human created calamities.</p>
      </div>
      <div class="one_third">
        <div class="calltoaction opt1">
          <div class="push20">
            <h1>Need blood ?</h1>
            <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur, integer commodo tristique odio, quis fringilla ligula&hellip;</p>
          </div>
          <div><a href="{{route('donor')}}" class="button large gradient orange">Manage Blood</a></div>
        </div>
      </div>
    </section>
    <!-- ################################################################################################ -->
    <section>
      <div id="tab-3" class="tab-content clear">
        <h2>Team Members</h2>
        <ul class="nospace clear">
          <li class="one_quarter first">
            <figure class="team-member"><img src="/admin/images/kamrul.jpg" alt="">
              <figcaption>
                <p class="team-name">Md.Kamrul Hasan</p>
                <p class="team-title">Student Id:170228</p>
                <p class="team-description">Computer Science and Engineering <br> Discipline Khulna University <br> Khulna</p>
                <p class="read-more"><a href="#">Read More &raquo;</a></p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>


@include('site.pertials.footer')