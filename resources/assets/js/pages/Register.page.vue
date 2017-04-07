<template>
  <div class="registerContainer">
    <div class="container">
      <div class="row bs-wizard" style="border-bottom:0;">
          <div class="col-xs-1">
          </div>
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 1, 'active': currentStep === 1, 'disabled': currentStep < 1 }"
          >
            <div class="text-center bs-wizard-stepnum">Step 1 {{currentStep}}</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 2, 'active': currentStep === 2, 'disabled': currentStep < 2 }"
          ><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 2</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 3, 'active': currentStep === 3, 'disabled': currentStep < 3 }"
          ><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 3</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 4, 'active': currentStep === 4, 'disabled': currentStep < 4 }"
          ><!-- active -->
            <div class="text-center bs-wizard-stepnum">Step 4</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
          </div>
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 5, 'active': currentStep === 5, 'disabled': currentStep < 5 }"
          ><!-- active -->
            <div class="text-center bs-wizard-stepnum">Step 5</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
          </div>
          <div class="col-xs-1">
          </div>
      </div>

      <!--<h3 class="stepHeader">{{currentStep}}</h3>-->
      <router-view></router-view>

    </div>
  </div>
</template>

<script>
  export default {
    computed: {
        currentStep() {
            // console.log(this.$route.path);
            const routeArr = this.$route.path.split('/');
            const currentStep = routeArr[routeArr.length - 1].split('step')[1];
            console.log(currentStep[0]);
            return Number(currentStep[0]);
        }
    },
    methods: {
        getClass(step) {
            const routeArr = this.$route.path.split('/');
            const currentStep = routeArr[routeArr.length - 1].split('step')[1];
            console.log(currentStep);
        }
    }
  }
</script>
<style scoped>
  .registerContainer{
    background-image: url("/img/bg/blue.png");
    background-repeat: repeat;
    min-height: 100vh;
  }
  .stepHeader{
    text-align: center;
  }
  .bs-wizard {margin-top: 40px;}

/*Form Wizard*/
.bs-wizard {
    border-bottom: solid 1px #e0e0e0;
    padding: 0 0 10px 0;
}
.bs-wizard > .bs-wizard-step {
    padding: 0;
    position: relative;
}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {} .bs-wizard > .bs-wizard-step .bs-wizard-stepnum {
    color: #595959;
    font-size: 16px;
    margin-bottom: 5px;
}
.bs-wizard > .bs-wizard-step .bs-wizard-info {
    color: #999;
    font-size: 14px;
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {
    position: absolute;
    width: 30px;
    height: 30px;
    display: block;
    background: #fbe8aa;
    top: 45px;
    left: 50%;
    margin-top: -15px;
    margin-left: -15px;
    border-radius: 50%;
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
    content: ' ';
    width: 14px;
    height: 14px;
    background: #fbbd19;
    border-radius: 50px;
    position: absolute;
    top: 8px;
    left: 8px;
}
.bs-wizard > .bs-wizard-step > .progress {
    position: relative;
    border-radius: 0px;
    height: 8px;
    box-shadow: none;
    margin: 20px 0;
}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {
    width: 0px;
    box-shadow: none;
    background: #fbe8aa;
    transition: none;
}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {
    width: 50%;
}
/*.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {
    width: 0%;
}*/
.bs-wizard > .bs-wizard-step:nth-child(2).active > .progress > .progress-bar {
    width: 0%;
}
/*.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {
    width: 100%;
}*/
.bs-wizard > .bs-wizard-step:nth-last-child(2).active > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {
    background-color: #f5f5f5;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {
    opacity: 0;
}
/*.bs-wizard > .bs-wizard-step:first-child > .progress {
    left: 50%;
    width: 50%;
}*/
.bs-wizard > .bs-wizard-step:nth-child(2) > .progress {
    left: 50%;
    width: 50%;
}
/*.bs-wizard > .bs-wizard-step:last-child > .progress {
    width: 50%;
}*/
.bs-wizard > .bs-wizard-step:nth-last-child(2) > .progress {
    width: 50%;
}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot {
    pointer-events: none;
}
/*END Form Wizard*/
</style>