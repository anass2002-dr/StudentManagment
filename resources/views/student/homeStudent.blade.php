@extends('student.layout')
@section('titel','Home Student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center py-3 text-primary">
            <h1>Home Page Student</h1>
        </div>
        <div class="col-md-6 col-sm-12">
            <h3>Definition of school</h3>
            <p>
                A school is an educational institution designed to provide learning spaces and learning environments
                for the teaching of students under the direction of teachers. Most countries have systems of formal
                education, which is sometimes compulsory.[2] In these systems, students progress through a series of schools.
                The names for these schools vary by country (discussed in the Regional terms section below)
                but generally include primary school for young children and secondary school for teenagers who have completed primary education.
                An institution where higher education is taught is commonly called a university college or university.
            </p>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="/assets/img/school_img.svg" class="h-75 w-75" alt="">
        </div>
       
        
        <div class="col-md-6 col-sm-12">
            <img src="/assets/img/history_school.svg" class="h-75 w-75" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <h3>History of education</h3>
            <p>
                The concept of grouping students together in a centralized location for learning has existed since Classical antiquity.
                Formal schools have existed at least since ancient Greece (see Academy), ancient Rome (see Education in Ancient Rome) 
                ancient India (see Gurukul), and ancient China (see History of education in China). The Byzantine Empire had an established
                schooling system beginning at the primary level. According to Traditions and Encounters,
                the founding of the primary education system began in 425 AD and "...
                military personnel usually had at least a primary education ...". 
                The sometimes efficient and often large government of the Empire meant that educated citizens were a must.
                Although Byzantium lost much of the grandeur of Roman culture and extravagance in the process of surviving,
                the Empire emphasized efficiency in its war manuals. The Byzantine education system continued until the empire's
                collapse in 1453 AD.
            </p>
        </div>
    </div>
</div>
@endsection