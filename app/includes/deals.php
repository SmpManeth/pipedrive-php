<div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">


   <div class="d-flex flex-row border">
      <div class="p-2 stage">
         <div>Stage one</div>
         <div class="d-flex flex-column">
            <div class="deals-box" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
         </div>
      </div>
      <div class="p-2 stage">
         <div>Stage Two</div>
         <div class="d-flex flex-column">
            <div class="deals-box" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
         </div>
      </div>
      <div class="p-2 stage">
         <div>Stage Three</div>
         <div class="d-flex flex-column">
            <div class="deals-box" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
         </div>
      </div>
   </div>

   <br>
   <img id="drag1" src="https://www.sterlinglanka.com/wp-content/uploads/2019/08/rrrr.png" draggable="true" ondragstart="drag(event)" width="336" height="69">


   <script>
      function allowDrop(ev) {
         ev.preventDefault();
      }

      function drag(ev) {
         ev.dataTransfer.setData("text", ev.target.id);
      }

      function drop(ev) {
         ev.preventDefault();
         var data = ev.dataTransfer.getData("text");
         ev.target.appendChild(document.getElementById(data));
      }
   </script>
</div>