@extends('layouts.meta') 

@section('stylesheet')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>

.wrapper {
  max-width: 900px;
  margin: 0 auto;
  padding: 25px;
}

.fa {
	font-size: 30px;
}

.slider-nav {
	height: 0;
}

a span i {
  position: relative;
  display: block;
  cursor: pointer;
  outline: 0;
  -webkit-transform: translateX(0px);
  -moz-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition: transform 0.3s ease;
  -moz-transition: transform 0.3s ease;
  transition: transform 0.3s ease;
}

a.previous span:hover i {
  -webkit-transform: translateX(-10px) scale(1.2);
  -moz-transform: translateX(-10px) scale(1.2);
  transform: translateX(-10px) scale(1.2);
}

a.next span:hover i {
  -webkit-transform: translateX(10px) scale(1.2);
  -moz-transform: translateX(10px) scale(1.2);
  transform: translateX(10px) scale(1.2);
}

.slider-nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: -webkit-box;
	display: flex;
	-webkit-box-pack: center;
	justify-content: center;
	position: relative;
    bottom: 60px;
}

.slider-nav li {
  -webkit-box-flex: 2;
  flex: 2;
  text-align: center;
  display: -webkit-box;
  display: flex;
}

.slide {
  max-width: 100%;
  display: none;
  -webkit-box-shadow: 10px 10px 20px 0 rgba(94,47,59,0.2);
  -moz-box-shadow: 10px 10px 20px 0 rgba(94,47,59,0.2);
  box-shadow: 10px 10px 20px 0 rgba(94,47,59,0.2);
}

.slide.active {
  display: block;
  -webkit-animation: fadeImg 0.8s;
  -moz-animation: fadeImg 0.8s;
  animation: fadeImg 0.8s;
}

.slider-nav .arrow {
  flex: 0 0 15%;
}

.slider-nav a {
  flex-basis: 100%;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
  align-items: center;
}

.slider-nav span {
  display: block;
  width: 100%;
}

@-webkit-keyframes fadeImg {
  from {
    opacity: 0; 
  }

  to {
    opacity: 1;
  }
}

@-moz-keyframes fadeImg {
  from {
    opacity: 0; 
  }

  to {
    opacity: 1;
  }
}

@keyframes fadeImg {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
</style>
@endsection


@section('body')
<div id="fullbackground">
  <div id="content">
    <div id="inner">
      <h1>Ambient Intelligence Lab</h1>
      <h3>Daffodil international university</h3>
      <!-- Start image slider or carousel home page -->
<div class="wrapper">
    <div class="slider">
        <img class="active slide" src="https://source.unsplash.com/gKk9rpyDryU">
        <img class="slide" src="https://source.unsplash.com/VFGEhLznjPU">
        <img class="slide" src="https://source.unsplash.com/InR-EhiO_js">
    </div>
    <nav class="slider-nav">
        <ul>
        <li class="arrow">
            <a class="previous">
            <span>
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            </a>
        </li>
        <li class="arrow">
            <a class="next">
            <span>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            </a>
        </li>
        </ul>
    </nav>
</div>
<!-- End image slider or carousel home page -->
    </div>
  </div>
</div>

<div>

</div>


@endsection


@section('javascript')
<script>
  const items = document.querySelectorAll('.slide');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
</script>
@endsection