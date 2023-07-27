<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>






<head>
<title>Home | ShosurBari</title>
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/optionsearch.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<!--Below Link Search Filter Settings Icon Spring -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>





<body>
  <!-- ============================  Navigation Start =========================== -->
  <?php include_once("includes/navigation.php");?>
  <!-- ============================  Navigation End ============================ -->
 


  <section>

  <div class="banner" style="--duration: 7s" id="slider-banner">
  
    <div class="banner-content" id="banner-content" target="_blank"></div>
    
    <div class="slide-indicators" id="slide-indicators" target="_blank"></div>
  
  
    <div class="sb-home-reg">
    <?php
      if (!isloggedin()) {
        echo '<a href="register.php" class="sb-create-account"><button> <i class="fa fa-gear fa-spin" style="font-size:24px"> </i>  নতুন একাউন্ট খুলুন</button></a>';
      }
    ?>
  </div>

    <div class="sb-search-btn">
      <a href="search.php"><button > <i class="fa fa-gear fa-spin" style="font-size:24px"> </i> বায়োডাটা খুজুন </button></a>
    </div>
    
  </div>

</section>













<h3 id="banner_text"></h3>

		<div class="droop-down">
      <div class="shosurbari-home-search">
        <div class="gender-radio-select">
          <label class="ellipsis" for="Looking">খুঁজছি</label>
          <div class="gender-option">
            <input type="radio" name="biodatagender" id="male_mob" value="পাত্রের বায়োডাটা" required/>
            <label for="male_mob"><i class="fa fa-male"></i> পাত্র </label>
          </div>
      
          <div class="gender-option">
            <input type="radio" name="biodatagender" id="female_mob" value="পাত্রীর বায়োডাটা"/>
            <label for="female_mob"><i class="fa fa-female"></i> পাত্রী</label><br>
          </div>
        </div>
      </div>


      <div class="shosurbari-home-search">
        <label class="form-control toggle-next ellipsis">বৈবাহিক অবস্থা <span style="color:#06b6d4;"><i class="fa fa-chevron-down"></i></span></label>
        <div class="checkboxes" id="Lorems">
          <div class="inner-wrap">
            <input type="checkbox" name="maritalstatus[]" value="Any Marital Status" class="SelectBox all" onchange="handleAllMaritalStatus(this)" checked />
            <span class="search-options"> সকল বৈবাহিক অবস্থা</span>
            <br>

            <input type="checkbox" name="maritalstatus[]" value="অবিবাহিত" class="SelectBox val" />
            <span class="search-options">অবিবাহিত </span>
            <br>

            <input type="checkbox" name="maritalstatus[]" value="ডিভোর্স" class="SelectBox val" />
            <span class="search-options">ডিভোর্স</span>
            <br>

            <input type="checkbox" name="maritalstatus[]" value="বিধবা" class="SelectBox val" />
            <span class="search-options">বিধবা</span>
            <br>

            <input type="checkbox" name="maritalstatus[]" value="বিপত্নীক" class="SelectBox val" />
            <span class="search-options">বিপত্নীক</span>
            <br>

            <input type="checkbox" name="maritalstatus[]" value="বিবাহিত" class="SelectBox val" />
            <span class="search-options">বিবাহিত</span>
          </div>
        </div>
			</div>


      <div class="shosurbari-home-search">
            <!--Biodata Occupation Option -->
              <label class="form-control toggle-next ellipsis">পেশা <span style=" color:#06b6d4;">   <i class="fa fa-chevron-down"></i></span></label>
              <div class="checkboxes" id="Lorems">
                <div class="inner-wrap">
                
                  
                <input type="checkbox" name="occupation_sector[]" value="Any Occupation" class="SelectBox all" onchange="handleAllOccupations(this)" checked />
                <span>সকল পেশা</span>
                <br>


                  <!-- Students Sector-->
                  <!-- SSC -->
                  <label class="label-search-options">মাধ্যমিক/সমমান শিক্ষার্থী</label> <br>
                  
                    <input type="checkbox" name="student_occupation_level[]" value="কওমি মাদ্রাসার শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">কওমি মাদ্রাসার শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="আলিয়া মাদ্রাসার দাখিল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options"> দাখিল শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="মাধ্যমিক শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">জেনারেল মাধ্যমিক শিক্ষার্থী</span>
                  <br>


                  <label class="label-search-options">উচ্চমাধ্যমিক/সমমান শিক্ষার্থী</label><br>
                  <!-- HSC -->
                  
                    <input type="checkbox" name="student_occupation_level[]" value="কলেজ শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">কলেজ শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="আলিয়া মাদ্রাসার আলিম শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">আলিম শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="পলিটেকনিক্যাল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">পলিটেকনিক্যাল শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="পেরামেডিক্যাল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">পেরামেডিক্যাল শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="নার্সিং শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">নার্সিং শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="মিডউইফারী শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">মিডউইফারী শিক্ষার্থী</span>
                  <br>

                  <!-- Honours -->
                  <label class="label-search-options">স্নাতক/সমমান শিক্ষার্থী</label><br>
                  
                    <input type="checkbox" name="student_occupation_level[]" value="মেডিকেল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">মেডিকেল শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="ফার্মেসী শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">ফার্মেসী শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="বি.এসসি. ইঞ্জিনিয়ারিং শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">বি.এসসি. ইঞ্জিনিয়ারিং শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="বি.বি.এ. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">বি.বি.এ. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="বি.এসসি. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">বি.এসসি. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="বি.এ. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">বি.এ. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="বি.কম. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">বি.কম. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="আলিয়া মাদ্রাসার ফাজিল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">ফাজিল শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="এম.এসসি. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">এম.এসসি. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="এম.এ. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">এম.এ. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="এম.কম. শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">এম.কম. শিক্ষার্থী</span>
                  <br>

                  
                    <input type="checkbox" name="student_occupation_level[]" value="কামিল শিক্ষার্থী" class="SelectBox val" />
                    <span class="search-options">কামিল শিক্ষার্থী</span>
                  <br>


                  <!-- Medical & Health Sector -->
                  <label class="label-search-options">চিকিৎসা/স্বাস্থ্য </label><br>
                  
                    <input type="checkbox" name="health_occupation_level[]" value="এম.বি.বি.এস. ডাক্তার" class="SelectBox val" />
                    <span class="search-options">এম.বি.বি.এস. ডাক্তার</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="ইন্টার্নশীপ ডাক্তার" class="SelectBox val" />
                    <span class="search-options">ইন্টার্নশীপ ডাক্তার</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="পশু চিকিৎসক" class="SelectBox val" />
                    <span class="search-options">পশু চিকিৎসক</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="ফার্মাসিস্ট" class="SelectBox val" />
                    <span class="search-options">ফার্মাসিস্ট</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="ডিপ্লোমা ডাক্তার" class="SelectBox val" />
                    <span class="search-options">ডিপ্লোমা ডাক্তার</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="নার্স" class="SelectBox val" />
                    <span class="search-options">নার্স</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="মিডউইফারী" class="SelectBox val" />
                    <span class="search-options">মিডউইফারী</span>
                  <br>

                  
                    <input type="checkbox" name="health_occupation_level[]" value="পল্লী চিকিৎসক" class="SelectBox val" />
                    <span class="search-options">পল্লী চিকিৎসক</span>
                  <br>


                  <!--  Engineers Sector-->
                  <label class="label-search-options">ইঞ্জিনিয়ার </label><br>
                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="সফটওয়্যার ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">সফটওয়্যার ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="টেক্সটাইল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">টেক্সটাইল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="সিভিল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">সিভিল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="ইলেকট্রিক্যাল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">ইলেকট্রিক্যাল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="মেরিন ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">মেরিন ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="নেটওয়ার্ক ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">নেটওয়ার্ক ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="রোবোটিক্স ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">রোবোটিক্স ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="এগ্রিকালচার ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">এগ্রিকালচার ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="আর্কিটেকচার ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">আর্কিটেকচার ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="মেকানিক্যাল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">মেকানিক্যাল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="কেমিক্যাল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">কেমিক্যাল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="বিয়োমেডিক্যাল ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">বিয়োমেডিক্যাল ইঞ্জিনিয়ার</span>
                  <br>

                  
                    <input type="checkbox" name="engineer_occupation_level[]" value="এরোস্পেস ইঞ্জিনিয়ার" class="SelectBox val" />
                    <span class="search-options">এরোস্পেস ইঞ্জিনিয়ার</span>
                  <br>


                  <!-- Teacher Profession -->
                  <label class="label-search-options">শিক্ষক/প্রফেসর </label><br>
                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="কওমি মাদ্রাসার শিক্ষক" class="SelectBox val" />
                    <span class="search-options">কওমি মাদ্রাসার শিক্ষক</span>
                  <br>

                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="আলিয়া মাদ্রাসার শিক্ষক" class="SelectBox val" />
                    <span class="search-options">আলিয়া মাদ্রাসার শিক্ষক</span>
                  <br>

                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="স্কুল শিক্ষক" class="SelectBox val" />
                    <span class="search-options">স্কুল শিক্ষক</span>
                  <br>

                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="কলেজ শিক্ষক" class="SelectBox val" />
                    <span class="search-options">কলেজ শিক্ষক</span>
                  <br>

                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="বিশ্ববিদ্যালয় প্রফেসর" class="SelectBox val" />
                    <span class="search-options">বিশ্ববিদ্যালয় প্রফেসর</span>
                  <br>

                  
                    <input type="checkbox" name="teacher_occupation_level[]" value="ডিগ্রির প্রফেসর" class="SelectBox val" />
                    <span class="search-options">ডিগ্রির প্রফেসর</span>
                  <br>


                  <!-- Defense Profession-->
                  <label class="label-search-options">প্রতিরক্ষা বাহিনী </label><br>
                  
                    <input type="checkbox" name="defense_occupation_level[]" value="সেনাবাহিনী" class="SelectBox val" />
                    <span class="search-options">সেনাবাহিনী</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="বিমানবাহিনী" class="SelectBox val" />
                    <span class="search-options">বিমানবাহিনী</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="নৌবাহিনী" class="SelectBox val" />
                    <span class="search-options">নৌবাহিনী</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="পুলিশ" class="SelectBox val" />
                    <span class="search-options">পুলিশ</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="ফায়ার সার্ভিস" class="SelectBox val" />
                    <span class="search-options">ফায়ার সার্ভিস</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="ডিবি" class="SelectBox val" />
                    <span class="search-options">ডিবি</span>
                  <br>

                  
                    <input type="checkbox" name="defense_occupation_level[]" value="আনসার" class="SelectBox val" />
                    <span class="search-options">আনসার</span>
                  <br>


                  <!-- Working Forign Sector-->
                  <label class="label-search-options">বিদেশে </label><br>
                  
                    <input type="checkbox" name="foreigner_occupation_level[]" value="বিদেশে চাকরি করি" class="SelectBox val" />
                    <span class="search-options">বিদেশে চাকরি</span>
                  <br>

                  
                    <input type="checkbox" name="foreigner_occupation_level[]" value="বিদেশে কাজ করি" class="SelectBox val" />
                    <span class="search-options">বিদেশে কাজ</span>
                  <br>

                  
                    <input type="checkbox" name="foreigner_occupation_level[]" value="বিদেশে ব্যবসা করি" class="SelectBox val" />
                    <span class="search-options">বিদেশে ব্যবসা</span>
                  <br>

                  
                    <input type="checkbox" name="foreigner_occupation_level[]" value="বিদেশে পড়াশোনা করি" class="SelectBox val" />
                    <span class="search-options">বিদেশে পড়াশোনা</span>
                  <br>


                  <!-- Garments Sector-->
                  <label class="label-search-options">গার্মেন্টস  </label><br>
                  
                    <input type="checkbox" name="garments_occupation_level[]" value="গার্মেন্টস ম্যানেজার" class="SelectBox val" />
                    <span class="search-options">গার্মেন্টস ম্যানেজার</span>
                  <br>

                  
                    <input type="checkbox" name="garments_occupation_level[]" value="গার্মেন্টস বায়িং হাউস" class="SelectBox val" />
                    <span class="search-options">গার্মেন্টস বায়িং হাউস</span>
                  <br>

                  
                    <input type="checkbox" name="garments_occupation_level[]" value="গার্মেন্টস শ্রমিক" class="SelectBox val" />
                    <span class="search-options">গার্মেন্টস শ্রমিক</span>
                  <br>


                  <!--  Driver Profession -->
                  <label class="label-search-options">ড্রাইভার/চালক</label>  <br>
                  
                    <input type="checkbox" name="driver_occupation_level[]" value="বাস ড্রাইভার" class="SelectBox val" />
                    <span class="search-options">বাস ড্রাইভার</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="মাইক্রো বাস ড্রাইভার" class="SelectBox val" />
                    <span class="search-options">মাইক্রো বাস ড্রাইভার</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="কার ড্রাইভার" class="SelectBox val" />
                    <span class="search-options">কার ড্রাইভার</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="ট্রাক ড্রাইভার" class="SelectBox val" />
                    <span class="search-options">ট্রাক ড্রাইভার</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="পাঠাও/উবার রাইডার" class="SelectBox val" />
                    <span class="search-options">পাঠাও/উবার রাইডার</span>
                  <br>

                  
                  <input type="checkbox" name="driver_occupation_level[]" value="CNG চালকr" class="SelectBox val" />
                    <span class="search-options">CNG চালক</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="অটো চালক" class="SelectBox val" />
                    <span class="search-options">অটো চালক</span>
                  <br>

                  
                    <input type="checkbox" name="driver_occupation_level[]" value="রিক্সা চালক" class="SelectBox val" />
                    <span class="search-options">রিক্সা চালক</span>
                  <br>



                  <!-- Common Profession-->
                  <label class="label-search-options"> সার্ভিস/ইন্টারনেট/ফাইন্যান্স/অন্যান্য </label><br>

                  <input type="checkbox" name="service_common_occupation_level[]" value="HR" class="SelectBox val" />
                    <span class="search-options">HR</span>
                  <br>


                    <input type="checkbox" name="service_common_occupation_level[]" value="ব্যাংকার" class="SelectBox val" />
                    <span class="search-options">ব্যাংকার</span>
                  <br>

                    <input type="checkbox" name="service_common_occupation_level[]" value="আইনজীবী" class="SelectBox val" />
                    <span class="search-options">আইনজীবী</span>
                  <br>


                    <input type="checkbox" name="service_common_occupation_level[]" value="উদ্যোক্তা" class="SelectBox val" />
                    <span class="search-options">উদ্যোক্তা</span>
                  <br>

                    <input type="checkbox" name="service_common_occupation_level[]" value="ফ্রীলান্সার" class="SelectBox val" />
                    <span class="search-options">ফ্রীলান্সার</span>
                  <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="ইউটিউবার" class="SelectBox val" />
                    <span class="search-options">ইউটিউবার</span>
                  <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="গ্রাফিক্স ডিজাইনার" class="SelectBox val" />
                    <span class="search-options">গ্রাফিক্স ডিজাইনার</span>
                  <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="সেলস & মার্কেটিং(SR)" class="SelectBox val" />
                    <span class="search-options">সেলস & মার্কেটিং(SR)</span>
                  <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="আর্ট/দেয়াল লিখন" class="SelectBox val" />
                    <span class="search-options">আর্ট/দেয়াল লিখন</span>
                   <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="নিরাপত্তারক্ষী" class="SelectBox val" />
                    <span class="search-options">নিরাপত্তারক্ষী</span>
                   <br>

                  
                    <input type="checkbox" name="service_common_occupation_level[]" value="রোজ কামলা/শ্রমিক" class="SelectBox val" />
                    <span class="search-options">রোজ কামলা/শ্রমিক</span>
                   <br>


                  <!-- Garments Sector-->
                  <label class="label-search-options">মিস্ত্রি </label><br>
                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="রাজ মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">রাজ মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="কাঠ মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">কাঠ মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="ইলেকট্রিক মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">ইলেকট্রিক মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="স্যানিটারি মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">স্যানিটারি মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="রড মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">রড মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="রং মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">রং মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="ফ্রিজ মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">ফ্রিজ মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="গ্যাস মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">গ্যাস মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="এসি মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">এসি মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="সিসি ক্যামেরা মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">সিসি ক্যামেরা মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="টাইলস ও মুজাইক মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">টাইলস ও মুজাইক মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="থাই এলুমিনিয়াম ও গ্লাস মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">থাই এলুমিনিয়াম ও গ্লাস মিস্ত্রি</span>
                  <br>

                  
                    <input type="checkbox" name="mistri_occupation_level[]" value="ওয়েলডিং/গ্রীল মিস্ত্রি" class="SelectBox val" />
                    <span class="search-options">ওয়েলডিং/গ্রীল মিস্ত্রি</span>
                  <br>

                </div>
              </div>
            </div>
          


      <div class="shosurbari-home-search">
            <!--Biodata District Option -->
              <label class="form-control toggle-next ellipsis">স্থায়ী জেলা<span style=" color:#06b6d4;">   <i class="fa fa-chevron-down"></i></span></label>
              <div class="checkboxes" id="Lorems">
                <div class="inner-wrap">
                  
                  
                <input type="checkbox" name="permanent_division[]" value="Any District" class="SelectBox all" onchange="handleAllDistricts(this)" checked />
                <span class="search-options">সকল জেলা</span>
                <br>


                  <!-- B A R I S H A L -->
                  <label class="label-search-options">বরিশাল বিভাগ </label><br>
                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="ঝালকাঠী" class="SelectBox val" />
                    <span class="search-options">ঝালকাঠী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="পটুয়াখালী" class="SelectBox val" />
                    <span class="search-options">পটুয়াখালী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="পিরোজপুর" class="SelectBox val" />
                    <span class="search-options">পিরোজপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="বরিশাল" class="SelectBox val" />
                    <span class="search-options">বরিশাল</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="বরগুনা" class="SelectBox val" />
                    <span class="search-options">বরগুনা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_barishal[]" value="ভোলা" class="SelectBox val" />
                    <span class="search-options">ভোলা</span>
                  <br>


                  <!-- C H A T T O G R A M -->
                  <label class="label-search-options">চট্টগ্রাম বিভাগ </label><br>
                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="কক্সবাজার" class="SelectBox val" />
                    <span class="search-options">কক্সবাজার</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="কুমিল্লা" class="SelectBox val" />
                    <span class="search-options">কুমিল্লা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="খাগড়াছড়ি" class="SelectBox val" />
                    <span class="search-options">খাগড়াছড়ি</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="চট্টগ্রাম" class="SelectBox val" />
                    <span class="search-options">চট্টগ্রাম</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="চাঁদপুর" class="SelectBox val" />
                    <span class="search-options">চাঁদপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="নোয়াখালী" class="SelectBox val" />
                    <span class="search-options">নোয়াখালী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="ফেনী" class="SelectBox val" />
                    <span class="search-options">ফেনী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="বান্দরবান" class="SelectBox val" />
                    <span class="search-options">বান্দরবান</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="ব্রাহ্মনবাড়ীয়া" class="SelectBox val" />
                    <span class="search-options">ব্রাহ্মনবাড়ীয়া</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="লক্ষীপুর" class="SelectBox val" />
                    <span class="search-options">লক্ষীপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_chattogram[]" value="রাঙ্গামাটি" class="SelectBox val" />
                    <span class="search-options">রাঙ্গামাটি</span>
                  <br>


                  <!--  D H A K A -->
                  <label class="label-search-options">ঢাকা বিভাগ</label> <br>
                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="কিশোরগঞ্জ" class="SelectBox val" />
                    <span class="search-options">কিশোরগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="গাজীপুর" class="SelectBox val" />
                    <span class="search-options">গাজীপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="গোপালগঞ্জ" class="SelectBox val" />
                    <span class="search-options">গোপালগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="টাঙ্গাইল" class="SelectBox val" />
                    <span class="search-options">টাঙ্গাইল</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="ঢাকা" class="SelectBox val" />
                    <span class="search-options">ঢাকা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="নরসিংদী" class="SelectBox val" />
                    <span class="search-options">নরসিংদী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="নারায়ণগঞ্জ" class="SelectBox val" />
                    <span class="search-options">নারায়ণগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="ফরিদপুর" class="SelectBox val" />
                    <span class="search-options">ফরিদপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="মাদারীপুর" class="SelectBox val" />
                    <span class="search-options">মাদারীপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="মানিকগঞ্জ" class="SelectBox val" />
                    <span class="search-options">মানিকগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="মুন্সীগঞ্জ" class="SelectBox val" />
                    <span class="search-options">মুন্সীগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="রাজবাড়ী" class="SelectBox val" />
                    <span class="search-options">রাজবাড়ী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_dhaka[]" value="শরীয়তপুর" class="SelectBox val" />
                    <span class="search-options">শরীয়তপুর</span>
                  <br>


                  <!-- K H U L N A-->
                  <label class="label-search-options">খুলনা বিভাগ</label> <br>
                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="কুষ্টিয়া" class="SelectBox val" />
                    <span class="search-options">কুষ্টিয়া</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="খুলনা" class="SelectBox val" />
                    <span class="search-options">খুলনা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="চুয়াডাঙ্গা" class="SelectBox val" />
                    <span class="search-options">চুয়াডাঙ্গা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="ঝিনাইদহ" class="SelectBox val" />
                    <span class="search-options">ঝিনাইদহ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="নড়াইল" class="SelectBox val" />
                    <span class="search-options">নড়াইল</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="বাগেরহাট" class="SelectBox val" />
                    <span class="search-options">বাগেরহাট</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="মাগুরা" class="SelectBox val" />
                    <span class="search-options">মাগুরা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="মেহেরপুর" class="SelectBox val" />
                    <span class="search-options">মেহেরপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="যশোর" class="SelectBox val" />
                    <span class="search-options">যশোর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_khulna[]" value="সাতক্ষীরা" class="SelectBox val" />
                    <span class="search-options">সাতক্ষীরা</span>
                  <br>


                  <!-- M Y M E N S I N G H -->
                  <label class="label-search-options"> ময়মনসিংহ বিভাগ</label> <br>
                  
                    <input type="checkbox" name="home_district_under_mymensingh[]" value="জামালপুর" class="SelectBox val" />
                    <span class="search-options">জামালপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_mymensingh[]" value="নেত্রকোনা" class="SelectBox val" />
                    <span class="search-options">নেত্রকোনা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_mymensingh[]" value="ময়মনসিংহ" class="SelectBox val" />
                    <span class="search-options">ময়মনসিংহ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_mymensingh[]" value="শেরপুর" class="SelectBox val" />
                    <span class="search-options">শেরপুর</span>
                  <br>


                  <!--  R A J S H A H I -->
                  <label class="label-search-options">রাজশাহী বিভাগ </label><br>
                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="চাঁপাই-নবাবগঞ্জ" class="SelectBox val" />
                    <span class="search-options">চাঁপাই-নবাবগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="জয়পুরহাট" class="SelectBox val" />
                    <span class="search-options">জয়পুরহাট</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="নওগাঁ" class="SelectBox val" />
                    <span class="search-options">নওগাঁ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="নাটোর" class="SelectBox val" />
                    <span class="search-options">নাটোর</span>
                  <br>

                  
                  <input type="checkbox" name="home_district_under_rajshahi[]" value="পাবনা" class="SelectBox val" />
                    <span class="search-options">পাবনা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="বগুড়া" class="SelectBox val" />
                    <span class="search-options">বগুড়া</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="রাজশাহী" class="SelectBox val" />
                    <span class="search-options">রাজশাহী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rajshahi[]" value="সিরাজগঞ্জ" class="SelectBox val" />
                    <span class="search-options">সিরাজগঞ্জ</span>
                  <br>


                  <!--  R A N G P U R -->
                  <label class="label-search-options">রংপুর বিভাগ </label><br>
                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="কুড়িগ্রাম" class="SelectBox val" />
                    <span class="search-options">কুড়িগ্রাম</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="গাইবান্ধা" class="SelectBox val" />
                    <span class="search-options">গাইবান্ধা</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="ঠাকুরগাঁও" class="SelectBox val" />
                    <span class="search-options">ঠাকুরগাঁও</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="দিনাজপুর" class="SelectBox val" />
                    <span class="search-options">দিনাজপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="নীলফামারী" class="SelectBox val" />
                    <span class="search-options">নীলফামারী</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="পঞ্চগড়" class="SelectBox val" />
                    <span class="search-options">পঞ্চগড়</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="রংপুর" class="SelectBox val" />
                    <span class="search-options">রংপুর</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_rangpur[]" value="লালমনিরহাট" class="SelectBox val" />
                    <span class="search-options">লালমনিরহাট</span>
                  <br>


                  <!-- S Y L H E T-->
                  <label class="label-search-options">সিলেট বিভাগ </label><br>
                  
                    <input type="checkbox" name="home_district_under_sylhet[]" value="মৌলভীবাজার" class="SelectBox val" />
                    <span class="search-options">মৌলভীবাজার</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_sylhet[]" value="সুনামগঞ্জ" class="SelectBox val" />
                    <span class="search-options">সুনামগঞ্জ</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_sylhet[]" value="সিলেট" class="SelectBox val" />
                    <span class="search-options">সিলেট</span>
                  <br>

                  
                    <input type="checkbox" name="home_district_under_sylhet[]" value="হবিগঞ্জ" class="SelectBox val" />
                    <span class="search-options">হবিগঞ্জ</span>
                  
                  
                </div>
              </div>
					</div>



          <div class="shosurbari-home-search">
            <label class="form-control toggle-next ellipsis">ধর্ম  <span style=" color:#06b6d4;">   <i class="fa fa-chevron-down"></i></span></label>
            <div class="checkboxes" id="Lorems">
              <div class="inner-wrap">
                <input type="checkbox" name="religion[]" value="Any Religion" class="SelectBox all" onchange="handleAllReligions(this)" checked />
                <span class="search-options">সকল ধর্ম</span>
                <br>

                <input type="checkbox" name="religion[]" value="ইসলাম ধর্ম" class="SelectBox val" />
                <span class="search-options">ইসলাম ধর্ম</span>
                <br>

                <input type="checkbox" name="religion[]" value="হিন্দু ধর্ম" class="SelectBox val" />
                <span class="search-options">হিন্দু ধর্ম</span>
                <br>

                <input type="checkbox" name="religion[]" value="খ্রিস্টান ধর্ম" class="SelectBox val" />
                <span class="search-options">খ্রিস্টান ধর্ম</span>
                <br>

                <input type="checkbox" name="religion[]" value="বৌদ্ধ ধর্ম" class="SelectBox val" />
                <span class="search-options">বৌদ্ধ ধর্ম</span>
                <br>

                <input type="checkbox" name="religion[]" value="অন্যান্য" class="SelectBox val" />
                <span class="search-options">অন্যান্য</span>
              </div>
            </div>
					</div>


					<div class="shosurbari-home-search">
            <div class="sort-by">
            <form action="search.php" method="post">
					      <input type="submit" value="search">
					    </form>				
					  </div>
          </div>
					<div class="clearfix"></div>
				</div>


      <script>
  let toggleLabels = document.querySelectorAll('.toggle-next');

toggleLabels.forEach(label => {
  label.addEventListener('click', () => {
    let targetId = label.getAttribute('data-target');
    let targetCheckbox = document.querySelector(`#${targetId}`);
    targetCheckbox.style.display = targetCheckbox.style.display === 'none' ? 'block' : 'none';
  });
});





          $(function() {
    
      setCheckboxSelectLabels();
      
      $('.toggle-next').click(function() {
        $(this).next('.checkboxes').slideToggle(400);
      });
      
      $('.SelectBox').change(function() {
        toggleCheckedAll(this);
        setCheckboxSelectLabels(); 
      });
      
    });
    
    function setCheckboxSelectLabels(elem) {
      var wrappers = $('.wrapper'); 
      $.each( wrappers, function( key, wrapper ) {
        var checkboxes = $(wrapper).find('.SelectBox');
        var label = $(wrapper).find('.checkboxes').attr('id');
        var prevText = '';
        $.each( checkboxes, function( i, checkbox ) {
          var button = $(wrapper).find('button');
          if( $(checkbox).prop('checked') == true) {
            var text = $(checkbox).next().html();
            var btnText = prevText + text;
            var numberOfChecked = $(wrapper).find('input.val:checkbox:checked').length;
            if(numberOfChecked >= 4) {
              btnText = numberOfChecked +' '+ label + ' selected';
            }
            $(button).text(btnText); 
            prevText = btnText + ', ';
          }
        });
      });
    }

    function toggleCheckedAll(checkbox) {
      var apply = $(checkbox).closest('.wrapper').find('.apply-selection');
      apply.fadeIn('slow'); 
      
      var val = $(checkbox).closest('.checkboxes').find('.val');
      var all = $(checkbox).closest('.checkboxes').find('.all');
      var SelectBox = $(checkbox).closest('.checkboxes').find('.SelectBox');

      if(!$(SelectBox).is(':checked')) {
        $(all).prop('checked', true);
        return;
      }

      if( $(checkbox).hasClass('all') ) {
        $(val).prop('checked', false);
      } else {
        $(all).prop('checked', false);
      }
    }
    </script>








<div class="shosurbari-body-notice">
  <div class="sb-body-message">
    <!-- <h1>বাংলাদেশী  ম্যাট্রিমনি<br>শশুরবাড়ি ডট কম</h1> -->
  </div>
  <div class="shosurbari-title">
    <h4>সকল ধর্ম, বর্ণ, জেলা, পেশার দেশি ও প্রবাসী বাঙালি পাত্র পাত্রী  খুঁজে পাওয়ার সহজ মাধ্যম। “শশুরবাড়ি ডট কম”</h4>
  </div>
</div>
<script>
  var bannerText = document.getElementById("banner_text");
  var animationDelay = 100; // in milliseconds (adjust the speed here)

  var textToType = "এখানে হাজারেরো বেশি যাচাইকৃত সদস্যর প্রোফাইল রয়েছে";
  var currentText = "";
  var currentIndex = 0;

  function typeText() {
    currentText += textToType[currentIndex];
    bannerText.textContent = currentText;

    currentIndex++;

    if (currentIndex < textToType.length) {
      setTimeout(typeText, animationDelay);
    } else {
      // Uncomment the next line if you want to repeat the typing animation
      // setTimeout(resetText, animationDelay * 2);
    }
  }

  function resetText() {
    currentText = "";
    currentIndex = 0;
    typeText();
  }

  typeText();
</script>
<style>
  .form-control {
    padding: 5px 6px;
  }
/* Style for the container of search options */
.droop-down {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Center the content horizontally */
  padding: 10px;
  height: 150px;
}

/* Style for each search option section */
.shosurbari-home-search {
  display: flex;
  flex-direction: column;
  width: 154px;
  margin: auto 6px;
  padding: 7px;
    background-color: #f1f1f1;
    box-shadow: 1px 1px 4px #888;
    border-radius: 4px;
}

/* Style for the select elements */
.shosurbari-home-search select {
  width: 200px; /* Set the desired width of the select elements */
  margin-top: 5px; /* Add some space between the label and the select element */
}

/* Style for the submit button */
.shosurbari-home-search input[type="submit"] {
  margin: auto; /* Add some space between the last search option and the submit button */
}

.sort-by select {
  width: 140px;
  height: 35px;
  border:1px solid #fff;
  outline:none;
}

.sort-by label{
margin-right:10px;
  font-size: 1.2em;
}

form {
  background: none;
  margin-bottom: 2px;
  margin-top: -19px;
}

@keyframes slide {
	0% {
		background-position: 100% 0;
	}
	100% {
		background-position: 0 0;
	}
}

.gender-radio-select .gender-option label {
  padding: 2px 1px;
  margin: auto -36px;
}

.gender-radio-select {
    padding: 4px 2px;
}

.gender-radio-select .gender-option {
    margin-left: 32px;
    margin-right: -16px;
}
</style>

<script>
const intervalText = document.getElementById("interval-text");
const intervalRange = document.getElementById("interval");
const bannerContent = document.getElementById("banner-content");
const sliderBanner = document.getElementById("slider-banner");
const slideIndicators = document.getElementById("slide-indicators");

const json = `
[{
	"srcset": [
		"images/shosurbari-home.png"
	],
	"text": "একদম ফ্রিতেই একাউন্ট খুলুন এবং বায়োডাটা পোস্ট করুন "
},
	{
		"srcset": [
			"images/shosurbari-home2.png"
		],
		"text": "বাংলাদেশী বাঙ্গালী ম্যাট্রিমোনি সার্ভিস"
	},
	{
		"srcset": [
			"images/shosurbari-home3.jpg"
		],
		"text": "আপনার স্বপ্নময় জীবনের সঙ্গী এখন শ্বশুরবাড়ি ডট কমে"
	}
]
`;

const images = JSON.parse(json);

createSlides(images);

function createSlides(data) {
  const slides = [];
  const indicators = [];
  let interval = 7000; // Set the interval to 45 seconds

  data.forEach((slideData, index) => {
    const slide = document.createElement("div");
    slide.className = `slide slide-${index}`;
    if (index === 0) slide.classList.add("active");

    const picture = document.createElement("picture");

    slideData.srcset.forEach((src) => {
      const source = document.createElement("source");
      source.srcset = src;
      picture.append(source);
    });

    const img = document.createElement("img");
    img.src = slideData.srcset.find((src) => !src.includes('webp'));
    picture.append(img);
    slide.append(picture);

    const text = document.createElement("p");
    text.textContent = slideData.text;
    slide.append(text);

    const indicator = document.createElement("div");
    indicator.className = "slide-indicator";
    if (index === 0) indicator.classList.add("active");

    slides.push(slide);
    indicators.push(indicator);
  });

  bannerContent.append(...slides);
  slideIndicators.append(...indicators);

  let intervalID;

  function startSlideshow() {
    if (intervalID) {
      clearInterval(intervalID);
    }

    let currentIndex = 0;
    intervalID = setInterval(() => {
      slides[currentIndex].classList.remove("active");
      indicators[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % slides.length;

      slides[currentIndex].classList.add("active");
      indicators[currentIndex].classList.add("active");
    }, interval);
  }

  startSlideshow();
}


  </script>
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                   S  T  A  R  T               --
  --           SHOSURBARI HOME PAGE / BANNER       --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <div class="banner2">
    <!-- <div class="banner_info">

      <h3 id="banner_text">Thousands of verified Members here</h3>
      <h1>বাংলাদেশী  ম্যাট্রিমনি<br>শশুরবাড়ি ডট কম</h1>

      <div class="shosurbari-title">
        <h4>“সকল ধর্ম, বর্ণ, জেলা, পেশার দেশি ও প্রবাসী বাঙালি পাত্র পাত্রী  খুঁজে পাওয়ার সহজ মাধ্যম।”</h4>
      </div>

    </div> -->



    <!-- <body onLoad="initClock()">
    <div class="clock" id="timedate">
      <h4>Today</h4>
      <p>Day: <a id="day"> </a></p>
      <p>Date: <a id="date"> </a> <a id="month"> <a id="year">  </a> </p>

      <p>Time: <a id="time">  </a> </p>
    </div>  -->
  </div> 


  <script>
    // START CLOCK SCRIPT
    Number.prototype.pad = function(n) {
      for (var r = this.toString(); r.length < n; r = '0' + r);
      return r;
    };

    function updateClock() {
      var now = new Date();
      var sec = now.getSeconds(),
      min = now.getMinutes(),
      hou = now.getHours(),
      dy = now.getDate(),
      mo = now.getMonth(),
      yr = now.getFullYear();
      var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

      var ampm = hou >= 12 ? 'PM' : 'AM';
      hou = hou % 12;
      hou = hou ? hou : 12;

      document.getElementById("day").textContent = days[now.getDay()];
      document.getElementById("date").textContent = dy;
      document.getElementById("month").textContent = months[mo];
      document.getElementById("year").textContent = yr;
      document.getElementById("time").textContent = hou.pad(2) + ":" + min.pad(2) + ":" + sec.pad(2) + " " + ampm;
    }

    function initClock() {
      updateClock();
      setInterval(updateClock, 1000);
    }
    // END CLOCK SCRIPT
  </script>
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --           SHOSURBARI HOME PAGE / BANNER       --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

  <style>
.sb-search-logo-btn {
  display: flex;
  align-items: center;
}

.sb-search-options,
.sb-search-logo {
  display: inline-flex;
}

.sb-search-logo-btn {
  display: flex;
  align-items: center;
}

.sb-search-options,
.sb-search-logo {
  display: inline-flex;
}

@media screen and (max-width: 930px) {
  .sb-search-options {
    display: none;
  }

  .sb-search-logo-btn {
    justify-content: center;
  }
}

@media screen and (max-width: 1024px) {
  .droop-down {
    display: block;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px;
    height: auto;
}

.shosurbari-home-search{
  margin: 10px auto;
  width: 200px;
}

.form-control{
  padding: 5px 10px;
}

.ellipsis{
  padding: 5px 10px;
}

.gender-radio-select .gender-option {
    margin-left: 30px;
    margin-right: -60px;
    width: 142%;
}

.gender-radio-select {
    padding: 0;
}

.gender-radio-select .gender-option label {
    padding: 2px 4px;
}
}

</style>



  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --      SHOSURBARI HOME PAGE / BODY CONTENT      --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <div class="sb-search-page">
    <h2>সার্চ ফিল্টার ব্যবহার করে খুঁজেনিন স্বপ্নময় জীবনসঙ্গী</h2>

    <div class="sb-search-logo-btn">
      <div class="sb-search-options">
        <img src="images/shosurbari-search.png">
      </div>

      <div class="sb-search-logo">
        <div class="sb-search-btn2">
          <p>  মনের মতন জীবন সঙ্গী <i class="fa fa-search" style="font-size:24px"> </i>  খুঁজে পেতে নিচের বাটনে ক্লিক করুন</p>
          <a href="search.php"><button > <i class="fa fa-search" style="font-size:24px"> </i> জীবনসঙ্গী খুজুন </button></a>
        </div>
      </div>
    </div>
  </div>
  


  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --    SHOSURBARI HOME PAGE / FEATURED PROFILES   --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <div class="grid_1">

    <div class="sb-featured-profiles">
      <h1>Featured Profiles</h1>
        
      <div class="sbhome-heart-divider">
        <span class="grey-line"></span>
          <i class="fa fa-heart pink-heart"></i>
          <i class="fa fa-heart grey-heart"></i>
        <span class="grey-line"></span>
      </div>


      <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM 1bd_personal_physical ORDER BY profilecreationdate DESC LIMIT 20"; //Last 20 New Profile View maximum 20 Profile Show
        	$result=mysqlexec($sql);
        	if($result){
        	while($row=mysqli_fetch_assoc($result)){
        		$profid=$row['user_id'];
        		$biodatagender=$row['biodatagender'];
            $dateofbirth=$row['dateofbirth'];
							    

						$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
						$result5=mysqlexec($sql5);
						if($result5)
						while($row5=mysqli_fetch_assoc($result5))
						$religion=$row5['religion'];
								

        		//Getting Profile Pic
        		$pic1='';
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2 = mysqlexec($sql2);
						if($result2){
						$row2=mysqli_fetch_array($result2);
						$pic1=$row2['pic1'];
						}


        // 2bd_personal_lifestyle
        $sql3 = "SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";
        $result3 = mysqlexec($sql3);
        if ($result3 && mysqli_num_rows($result3) > 0) {
            $row3 = mysqli_fetch_assoc($result3);
            $other_occupation_sector=$row3['other_occupation_sector'];

            $occupation_levels = array(
                'business_occupation_level' => $row3['business_occupation_level'],
                'student_occupation_level' => $row3['student_occupation_level'],
                'health_occupation_level' => $row3['health_occupation_level'],
                'engineer_occupation_level' => $row3['engineer_occupation_level'],
                'teacher_occupation_level' => $row3['teacher_occupation_level'],
                'defense_occupation_level' => $row3['defense_occupation_level'],
                'foreigner_occupation_level' => $row3['foreigner_occupation_level'],
                'garments_occupation_level' => $row3['garments_occupation_level'],
                'driver_occupation_level' => $row3['driver_occupation_level'],
                'service_andcommon_occupation_level' => $row3['service_andcommon_occupation_level'],
                'mistri_occupation_level' => $row3['mistri_occupation_level'],
            );
            $occupation_levels = array_filter($occupation_levels); // Remove empty values
            $occupation_count = count($occupation_levels);

            if ($occupation_count > 0) {
                $occupation_label = array_keys($occupation_levels)[0];
                $occupation_value = $occupation_levels[$occupation_label];



					  //PRINTING THE PROFILE
            echo "<li class=\"sb_newbiodata\">";
            echo "<div class=\"sb_featured_profile_head\">";
            echo "<div class=\"sbbio_header_recent_view\">";

            // Start for Default Photo Show
            echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\">";
            if (!empty($pic1)) {
            echo "<img class=\"img-responsive\" src=\"profile/{$profid}/{$pic1}\"/>";
            } else {
            echo "<img class=\"img-responsive\" src=\"images/shosurbari-male-icon.jpg\"/>";
            }
            echo "</a>";
            // End for Default photo Show

            echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> বায়োডাটা নং </span> </div>";
            echo "</div>";
            echo "<div class=\"sb_user_recentview\">";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> বায়োডাটা </span>  <span class=\"sb_data_recentview\">{$biodatagender}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> ধর্ম </span>  <span class=\"sb_data_recentview\">{$religion}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> পেশা </span>  <span class=\"sb_data_recentview\">{$occupation_value}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> জন্ম সন</span>        <span class=\"sb_data_recentview\"> {$dateofbirth}</span></span>";
            echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\">সম্পূর্ণ প্রোফাইল</button> </a>";
            echo "</div></div>";
            echo "</li>";
        	}
		      }
        }
      }
        ?>
      </ul>


      <!-- START FOR PROFILES ANIMATION SLIDE SHOW -->
      <script type="text/javascript">
        $(window).load(function() {
        $("#flexiselDemo3").flexisel({
          visibleItems: 4,
          animationSpeed: 700,
          autoPlay:false,
          autoPlaySpeed: 5000,    		
          pauseOnHover: true,
          enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
          portrait: { 
          changePoint:480,
          visibleItems: 1
          }, 
          landscape: { 
          changePoint:601,
          visibleItems: 2
          },
          tablet: { 
          changePoint:769,
          visibleItems: 3
          }
          }
        });   
        });
      </script>
      <!-- ENDT FOR PROFILES ANIMATION SLIDE SHOW -->


      <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
  </div>
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --    SHOSURBARI HOME PAGE / FEATURED PROFILES   --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
      <h1 class="shosurbar-about">শ্বশুরবাড়ি ডট কম</h1>
<ul class="shosurbar-grrombride-about">
    <li style="--accent-color:#0B374D">
        <div class="icon"><i class="fa-brands fa-codepen"></i></div>
        <div class="title">Codepen</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, impedit?</div>
    </li>
    <li style="--accent-color:#1286A8">
        <div class="icon"><i class="fa-brands fa-html5"></i></div>
        <div class="title">HTML 5</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
    <li style="--accent-color:#D2B53B">
        <div class="icon"><i class="fa-brands fa-css3"></i></div>
        <div class="title">CSS 3</div>
        <div class="descr">Lorem ipsum dolor sit.</div>
    </li>
    <li style="--accent-color:#DA611E">
        <div class="icon"><i class="fa-brands fa-js"></i></div>
        <div class="title">Javascript</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam odio alias.</div>
    </li>
    <li style="--accent-color:#AC2A1A">
        <div class="icon"><i class="fa-brands fa-github"></i></div>
        <div class="title">Github</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
</ul>

<style>

.shosurbar-about {
  text-align: center;
  margin-top: 150px;
  margin-bottom: 0px;
}

.shosurbar-grrombride-about {
  --col-gap: 2rem;
  --barH: 1rem;
  --roleH: 2rem;
  --flapH: 2rem;
  margin-top: 50px;
  width: min(60rem, 90%);
  margin-inline: auto;

  display: flex;
  flex-wrap: wrap;

  gap: var(--col-gap);
  padding-inline: calc(var(--col-gap) / 2);

  justify-content: center;
  align-items: flex-start;
  list-style: none;
}
.shosurbar-grrombride-about li {
  width: 10em;
  display: grid;
  grid-template:
    "role"
    "icon"
    "title"
    "descr";
  align-items: flex-start;
  gap: 1rem;
  padding-block-end: calc(var(--flapH) + 1rem);
  text-align: center;
  background: var(--accent-color);
  background-image: linear-gradient(
    rgba(0, 0, 0, 0.6) var(--roleH),
    rgba(0, 0, 0, 0.4) calc(var(--roleH) + 0.5rem),
    rgba(0, 0, 0, 0) calc(var(--roleH) + 0.5rem + 5rem)
  );
  clip-path: polygon(
    calc(var(--col-gap) / -2 - 5px) 0,
    calc(100% + var(--col-gap) / 2 + 5px) 0,
    calc(100% + var(--col-gap) / 2 + 5px ) calc(100% - var(--flapH)),
    50% 100%,
    calc(var(--col-gap) / -2 - 5px) calc(100% - var(--flapH))
  );
}

/* bar */
.shosurbar-grrombride-about li::before {
  content: "";
  grid-area: role;
  height: var(--barH);
  width: calc(100% + var(--col-gap));
  margin-left: calc(var(--col-gap) / -2);
  margin-top: calc(var(--roleH) / 2 - var(--barH) / 2);
  background: grey;
  z-index: -1;
  background-image: linear-gradient(
    rgba(255, 255, 255, 0.4),
    rgba(255, 255, 255, 0.2) 30%,
    rgba(255, 255, 255, 0.1) 40%,
    rgba(0, 0, 0, 0.1) 60%,
    rgba(0, 0, 0, 0.2) 70%,
    rgba(0, 0, 0, 0.4)
  );
}

/* role */
.shosurbar-grrombride-about li::after {
  content: "";
  grid-area: role;
  background: var(--accent-color);
  background-image: linear-gradient(
    rgba(255, 255, 255, 0.4),
    rgba(255, 255, 255, 0.2) 30%,
    rgba(255, 255, 255, 0.1) 40%,
    rgba(0, 0, 0, 0.1) 60%,
    rgba(0, 0, 0, 0.2) 70%,
    rgba(0, 0, 0, 0.4)
  );
  height: var(--roleH);
}

.shosurbar-grrombride-about li .icon,
.shosurbar-grrombride-about li .title,
.shosurbar-grrombride-about li .descr {
  padding-inline: 1rem;
  color: white;
  text-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5);
}

.shosurbar-grrombride-about li .icon {
  font-size: 3rem;
}
.shosurbar-grrombride-about li .title {
  font-size: 1.25rem;
  font-weight: 700;
}

.shosurbar-grrombride-about li .descr {
  font-size: 0.9rem;
}

.credits {
  position: fixed;
  bottom: 1rem;
  right: 1rem;
}
.credits a {
  color: var(--color);
}















/* 


@keyframes changeColor {
  0%, 100% {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
  }
  25% {
    background: linear-gradient(135deg, #c8d5b9, #f7f0a4);
  }
  50% {
    background: linear-gradient(135deg, #a0c4ff, #c2e9fb);
  }
  75% {
    background: linear-gradient(135deg, #b5e2fa, #9ed2ff);
  }
} */
</style>

  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --       SHOSURBARI HOME PAGE / WEB  DETAILS     --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	

  
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --       SHOSURBARI HOME PAGE / WEB  DETAILS     --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	





  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                   E   N   D                    --
  --      SHOSURBARI HOME PAGE / BODY CONTENT      --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <?php include_once("footer.php");?>
</body>
</html>	
