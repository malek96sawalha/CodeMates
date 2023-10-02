{{-- @extends('layouts.nav') --}}
@extends('layouts.ahmadmaster')
    @section('content')
        
<style>
  #alertMO{
    color: white !important;
    padding: 42px;
  }
@import url('https://fonts.googleapis.com/css2?family=Khand:wght@500&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
}
.all  { 
  height: 100vh;
  display: flex;
  font-size: 14px;
  text-align: center;
  justify-content: center;
  align-items: center;
  font-family: 'Khand', sans-serif;   
}        

.wrapperAlert {
  width: 70%;
  height: 510px;
  overflow: hidden;
  border-radius: 12px;
  border: thin solid #ddd; 
      margin-top: 10%;          
}

.topHalf {
  width: 100%;
  color: white;
  overflow: hidden;
  min-height: 250px;
  position: relative;
  padding: 40px 0;
  background: rgb(0,0,0);
 background: -webkit-linear-gradient(45deg, #64a37c, #1e7d5c);
}

.topHalf p {
  margin-bottom: 30px;
}
svg {
  fill: white;
}
.topHalf h1 {
  font-size: 2.25rem;
  display: block;
  font-weight: 500;
  letter-spacing: 0.15rem;
  text-shadow: 0 2px rgba(128, 128, 128, 0.6);
}
        
/* Original Author of Bubbles Animation -- https://codepen.io/Lewitje/pen/BNNJjo */
.bg-bubbles{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;            
  z-index: 1;
}

span{
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);/* fade(green, 75%);*/
  bottom: -160px;

  -webkit-animation: square 20s infinite;
  animation:         square 20s infinite;

  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
}
span:nth-child(1){
  left: 10%;
}		
span:nth-child(2){
  left: 20%;

  width: 80px;
  height: 80px;

  animation-delay: 2s;
  animation-duration: 17s;
}		
span:nth-child(3){
  left: 25%;
  animation-delay: 4s;
}		
span:nth-child(4){
  left: 40%;
  width: 60px;
  height: 60px;

  animation-duration: 22s;

  background-color: rgba(white, 0.3); /* fade(white, 25%); */
}		
span:nth-child(5){
  left: 70%;
}		
span:nth-child(6){
  left: 80%;
  width: 120px;
  height: 120px;

  animation-delay: 3s;
  background-color: rgba(white, 0.2); /* fade(white, 20%); */
}		
span:nth-child(7){
  left: 32%;
  width: 160px;
  height: 160px;

  animation-delay: 7s;
}		
span:nth-child(8){
  left: 55%;
  width: 20px;
  height: 20px;

  animation-delay: 15s;
  animation-duration: 40s;
}		
span:nth-child(9){
  left: 25%;
  width: 10px;
  height: 10px;

  animation-delay: 2s;
  animation-duration: 40s;
  background-color: rgba(white, 0.3); /*fade(white, 30%);*/
}		
span:nth-child(10){
  left: 90%;
  width: 160px;
  height: 160px;

  animation-delay: 11s;
}

@-webkit-keyframes square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-500px) rotate(600deg); }
}
@keyframes square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-500px) rotate(600deg); }
}

.bottomHalf {
  align-items: center;
  padding: 35px;
}
.bottomHalf p {
  font-weight: 500;
  font-size: 1.05rem;
  margin-bottom: 20px;
}

button {
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 12px;            
  padding: 10px 18px;            
  background-color: #019871;
  text-shadow: 0 1px rgba(128, 128, 128, 0.75);
}
button:hover {
  background-color: #85ddbf;
}
</style>
<div class="all">
<div class="wrapperAlert">

  <div class="contentAlert">

    <div class="topHalf">

      <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
        </svg></p>
      <h1>Thank you For volunteer</h1>

     <ul class="bg-bubbles">
       <span>Volnter</span>
       <span>Ahmad</span>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
     </ul>
    </div>

    <div class="bottomHalf">

      <p>Well Done!, you actually managed to accomplish something today...</p>

      <button style="background:#019871"><a href="{{ route('home') }}" id="alertMO" > Back To Home</a></button>   
     

    </div>

  </div>        

</div>
</div>
    @endsection
