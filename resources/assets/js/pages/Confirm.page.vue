<template>
  <div class="confirm-container">
    <div class="container">
      <div class="col-md-6 col-xs-12">
        <h1 class="confirm-title">ยืนยันสิทธิ์</h1>
        <div class="camper-detail">
          <h4 class="pad-ref"><b>Ref ID:</b></h4>        
          <h4><b>ชื่อ-นามสกุล:</b> นายทดสอบ นามสกุลเทสสสสส</h4>
          <h4><b>ยอดเงิน:</b> 200.11</h4>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="slip-image">
          <div v-if="img === ''" class="slip-placeholder"></div>
          <img v-else :src="img">        
        </div>
        <div style="text-align:center;">
            <input type="file" id="files" class="hidden" v-on:change="onFileChange" accept="image/*"/>
            <label for="files">
                <!--<img class="upload-btn" src="./upload.png">-->
                <a class="btn-game">
                    <div class="btn-game upload-btn">อัพโหลดหลักฐานการโอนเงิน</div>
                </a>
            </label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  mounted() {
    if (this.$store.getters.accessToken === '') {
      // this.$router.push('/');
    }
  },
  data: () => ({
    img: '',
  }),
  computed: mapGetters({
    token: 'accessToken',
  }),
  methods: {
    onFileChange(e) {
      const files = e.target.files || e.dataTransfer.files;
      if (!files.length)
        return;
      this.createImage(files[0]);

      // let formData = new FormData()
      // formData.append('ProfilePicture', files[0])

      // axios.post('/api/register/profilepicture', formData).then(function (res) {
      //   console.log(res.data)
      // })
    },
    createImage(file) {
      const reader = new FileReader();
      const vm = this;
      reader.onload = function (e) {
        const image = new Image();
        image.onload = () => {
          console.log('success', image.width, image.height);
          console.log(file.size)
          if (file.size <= 2100000) {
            vm.img = e.target.result;
          }
          else {
            alert('ขนาดไฟล์เกิน 2 MB')
          }
        }
        image.src = e.target.result;
      };
      reader.readAsDataURL(file);
    },
  }
}
</script>

<style lang="scss">
@import '../../sass/_variables.scss';

.confirm-title {
  font-weight: 600;
  color: $yellow;
}
.upload-btn:hover {
    margin-top: 0px;
}
.upload-btn {
    font-size: 32px;
    padding-left: 25px;
    padding-right: 25px;
    border-bottom: none;
    max-width: 400px;
}

.confirm-container {
  @include background('/img/bg/brown.png');
  text-align: center;
  padding-top: 50px;
  padding-bottom: 50px;
  .camper-detail {
    padding-top: 10px;
    padding-bottom: 10px;
    .pad-ref {
      padding-bottom: 30px;
      @media(max-width: 768px) {
        padding-bottom: 0px;
      }
    }
  }
  .slip-image {
    height: 350px;
    margin-top: 20px;
    margin-bottom: 20px;
    .slip-placeholder {
      background-color: white;
      border-radius: 50px;
      width: 350px;
      height: 350px;
      margin: 0 auto;
    }
    img {
      height: 100%;
    }
  }
  .confirm-btn {
    width: 200px;
    background: #3364a7;
    color: white;
    border-radius: 30px;
    border-bottom: 5px solid #1a40a7;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 20px;
    cursor: pointer;
    &:hover {
      margin-top: 13px;
      border-bottom: 3px solid #2455a7;
    }
  }
}
</style>
