<script>
import axios from "axios";
import { ref } from "vue";
import "../bootstrap.js";
import './cloud.css'

</script>

<template>

  <nav class="navbar navbar-dark bg-dark">
   
    <a class="navbar-brand mx-2" href="/tasks">Task Manager <span role="img" aria-label="Memo">📝</span></a>

    <a class="navbar-brand mx-2" href="/home">Home</a>

  </nav>

  <div class="container mt-4 mb-4 ">
<ul class="cloud" role="navigation" aria-label="Webdev tag cloud">

  <li><p data-weight="4"  value="Read" >Read</p></li>
  <li><p data-weight="2" value="Relate" >Relate</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Story" value="Story" >Story</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Observe" value="Observe" >Observe</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Turn" value="Turn" >Turn</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Write" value="Write" >Write</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Create" value="Create" >Create</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Change" value="Change" >Change</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Rest" value="Rest" >Rest</p></li>
  <li><p data-weight="9" href="/articles/?search_by_title=Share" value="Share" >Share</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Develop" value="Develop" >Develop</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Dream" value="Dream" >Dream</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Understand" value="Understand" >Understand</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Move" value="Move" >Move</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Less" value="Less" >Less</p></li>
  <li><p data-weight="9" href="/articles/?search_by_title=Relate" value="Relate" >Relate</p></li>
  <li><p data-weight="2" href="/articles/?search_by_title=Reflect" value="Reflect" >Reflect</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Impact" value="Impact" >Impact</p></li>

  <li><p data-weight="1" href="/articles/?search_by_title=Matter" value="Matter">Matter</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=History" value="History">History</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Write" value="Write">Write</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Impact" value="Impact">Impact</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Move" value="Move">Move</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Rest" value="Rest">Rest</p></li>
  <li><p data-weight="9" href="/articles/?search_by_title=Free" value="Free">Free</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Reflect" value="Reflect">Reflect</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Respond" value="Respond">Respond</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Connect" value="Connect">Connect</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Give" value="Give">Give</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Learn" value="Learn">Learn</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Live" value="Live">Live</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Read" value="Read">Read</p></li>
  <li><p data-weight="2" href="/articles/?search_by_title=Pause" value="Pause">Pause</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Story" value="Story">Story</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Difference" value="Difference">Difference</p></li>

  <li><p data-weight="6" href="/articles/?search_by_title=Develop" value="Develop">Develop</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Write" value="Write">Write</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Time" value="Time">Time</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Defy" value="Defy">Defy</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=People" value="People">People</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=World" value="World">World</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Inform" value="Inform">Inform</p></li>
  <li><p data-weight="9" href="/articles/?search_by_title=Impact" value="Impact">Impact</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Reflect" value="Reflect">Reflect</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Forget" value="Forget">Forget</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Remember" value="Remember">Remember</p></li>
  <li><p data-weight="9" href="/articles/?search_by_title=Pause" value="Pause">Pause</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Imagine" value="Imagine">Imagine</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Love" value="Love">Love</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Give" value="Give">Give</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Art" value="Art">Art</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Change" value="Change">Change</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Rest" value="Rest">Rest</p></li>

  <li><p data-weight="9" href="/articles/?search_by_title=Wonder" value="Wonder">Wonder</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Explore" value="Explore">Explore</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Pen" value="Pen">Pen</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Connect" value="Connect">Connect</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Collect" value="Collect">Collect</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Think" value="Think">Think</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Defy" value="Defy">Defy</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Comfort" value="Comfort">Comfort</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Travel" value="Travel">Travel</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Journal" value="Journal">Journal</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Quest" value="Quest">Quest</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Intrigue" value="Intrigue">Intrigue</p></li>
  <li><p data-weight="4" href="/articles/?search_by_title=Suspense" value="Suspense">Suspense</p></li>
  <li><p data-weight="5" href="/articles/?search_by_title=Kindness" value="Kindness">Kindness</p></li>
  <li><p data-weight="6" href="/articles/?search_by_title=Defend" value="Defend">Defend</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Paper" value="Paper">Paper</p></li>

  <li><p data-weight="9" href="/articles/?search_by_title=Reason" value="Reason">Reason</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Explore" value="Explore">Explore</p></li>
  <li><p data-weight="7" href="/articles/?search_by_title=Pen" value="Pen">Pen</p></li>
  <li><p data-weight="8" href="/articles/?search_by_title=Ackonwledge" value="Ackonwledge">Ackonwledge</p></li>
  <li><p data-weight="1" href="/articles/?search_by_title=Collect" value="Collect">Collect</p></li>
  <li><p data-weight="3" href="/articles/?search_by_title=Think" value="Think">Think</p></li>
  
</ul>


<div class="center mt-4">
<h4>How to prioritize tasks</h4>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/czh4rmk75jc?si=zlkbsfoKcpxHgoF_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>


<div class="center mt-4">
<h4>How to take notes:</h4>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/jBHLC8dff48?si=onsV8PufDWkc-SSD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
  

  <div class="center mt-4">
<h4>Music to focus:</h4>
 <iframe width="560" height="315" src="https://www.youtube.com/embed/oPVte6aMprI?si=0ehzMD6F3KZOfE6B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

   </div>
</template>