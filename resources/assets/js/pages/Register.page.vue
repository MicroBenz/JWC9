<template>
  <div class="registerContainer">
    <div class="container">
      <div class="row bs-wizard" style="border-bottom:0;">
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 1, 'active': currentStep === 1, 'disabled': currentStep < 1 }"
          >
            <!--<div class="text-center bs-wizard-stepnum">Step 1 {{currentStep}}</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-1"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 2, 'active': currentStep === 2, 'disabled': currentStep < 2 }"
          ><!-- complete -->
            <!--<div class="text-center bs-wizard-stepnum">Step 2</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-2"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 3, 'active': currentStep === 3, 'disabled': currentStep < 3 }"
          ><!-- complete -->
            <!--<div class="text-center bs-wizard-stepnum">Step 3</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-3"></a>
          </div>
          
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 4, 'active': currentStep === 4, 'disabled': currentStep < 4 }"
          ><!-- active -->
            <!--<div class="text-center bs-wizard-stepnum">Step 4</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-4"></a>
          </div>
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 5, 'active': currentStep === 5, 'disabled': currentStep < 5 }"
          ><!-- active -->
            <!--<div class="text-center bs-wizard-stepnum">Step 5</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-5"></a>
          </div>
          <div class="col-xs-2 bs-wizard-step"
            v-bind:class="{ 'complete': currentStep > 6, 'active': currentStep === 6, 'disabled': currentStep < 6 }"
          ><!-- active -->
            <!--<div class="text-center bs-wizard-stepnum">Step 5</div>-->
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot step-6"></a>
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
<style lang="scss" scoped>
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
    padding: 0 0 25px 0;
    @media(max-width: 768px) {
        padding: 0 0 5px 0;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
        padding: 0 0 25px 0;
    }
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
    width: 60px;
    height: 60px;
    display: block;
    background-color: #543224;
    color: white;
    top: -7px;
    // left: 50%;
    /*margin-top: -15px;*/
    // margin-left: -15px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    text-align: center;
    font-size: 43px;
    line-height: 60px;
    @media(max-width: 768px) {
        width: 30px;
        height: 30px;
        top: 7px;
        font-size: 23px;
        line-height: 30px;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
        width: 60px;
        height: 60px;
        top: -7px;
        font-size: 33px;
        line-height: 60px;
    }
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
    content: '';
    line-height: 50px;
    width: 50px;
    height: 50px;
    background-color: #fac720;
    color: #543224;
    border-radius: 50px;
    position: absolute;
    top: 5px;
    left: 5px;
    @media(max-width: 768px) {
        line-height: 25px;
        width: 25px;
        height: 25px;
        top: 3px;
        left: 3px;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
        line-height: 50px;
        width: 50px;
        height: 50px;
        top: 5px;
        left: 5px;
    }
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {
    background-color: #543224;
    color: white;
}
.bs-wizard > .bs-wizard-step.complete > .bs-wizard-dot:after {
    background-color: #543224;
    color: white;    
}

.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-1:after {
    content: '1';
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-2:after {
    content: '2';
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-3:after {
    content: '3';
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-4:after {
    content: '4';
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-5:after {
    content: '5';
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot.step-6:after {
    content: '6';
}
.bs-wizard > .bs-wizard-step > .progress {
    position: relative;
    border-radius: 0px;
    height: 8px;
    box-shadow: none;
    margin: 20px 0;
    background-color: #543224;    
}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {
    width: 0px;
    box-shadow: none;
    background-color: #543224;
    transition: none;
}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {
    width: 50%;
}
.bs-wizard > .bs-wizard-step:first-child > .progress {
    width: 50%;
    margin-left: 50%;
}
// .bs-wizard > .bs-wizard-step:nth-child(2).active > .progress > .progress-bar {
//     width: 0%;
// }
/*.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {
    width: 100%;
}*/
// .bs-wizard > .bs-wizard-step:nth-last-child(2).active > .progress > .progress-bar {
//     width: 100%;
// }
/*.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {
    background-color: #f5f5f5;
}*/
/*.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {
    opacity: 0;
}*/
/*.bs-wizard > .bs-wizard-step:first-child > .progress {
    left: 50%;
    width: 50%;
}*/
// .bs-wizard > .bs-wizard-step:nth-child(2) > .progress {
//     left: 50%;
//     width: 50%;
// }
.bs-wizard > .bs-wizard-step:last-child > .progress {
    width: 50%;
}
// .bs-wizard > .bs-wizard-step:nth-last-child(2) > .progress {
//     width: 50%;
// }
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot {
    pointer-events: none;
}
/*END Form Wizard*/
</style>