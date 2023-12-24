@extends('layouts.dashboard-base') @section('css')
<link
    rel="stylesheet"
    href="{{ asset('static/css/cak/content/riwayat.css') }}"
/>
@endsection @section('title') Riwayat Return @endsection
@section('main-content')

{{-- Heading --}}
<div class="heading">
    <div class="headline">
        <h1>Riwayat Return</h1>
        <h5>Lihat penarikan return dari profitmu</h5>
    </div>
    <a href="" class="profile">
        <img src="{{ asset('static/image/cak/pfp.png') }}" alt="" />
        <div class="profile-text">
            <h4>Cakra</h4>
            <h6>UX Designer</h6>
        </div>
    </a>
</div>

{{-- Content --}}
<div class="content">
    <button class="filter">
        <img src="{{ asset('static/image/cak/icon/filter.svg') }}" alt="" />
        <p>Filter</p>
    </button>
    <div id="filter-card">
        <div class="filter-name">
            <div class="startup-name active">Filter</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <!-- <div class="filter-name">
            <div class="startup-name">Hire</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <div class="filter-name">
            <div class="startup-name">Skole</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <div class="filter-name">
            <div class="startup-name">Fire</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div> -->
    </div>
    <div class="wrapper-container">
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-hire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>H!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 1.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-fire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>F!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 2.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-skola.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>Skola</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 3.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-hire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>H!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 1.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-fire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>F!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 2.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-fire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>F!ame</h2>
            </div>
            <h3>Returns</h3>
            <h2>Rp 2.000.000</h2>
        </div>
    </div>
</div>

@endsection @section('js')
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script>
    const filterBtn = document.querySelector(".filter");
    const filterCard = document.querySelector("#filter-card");
    const histories = document.querySelectorAll(".text > h2");

    //Filter card dropdown
    filterCard.style.display = "none";

    filterBtn.addEventListener("click", (e) => {
        filterCard.style.display =
            filterCard.style.display === "none" ||
            filterCard.style.display === ""
                ? "block"
                : "none";
        <!-- filterCard.classList.toggle("active"); -->
    });

    //Get All Start Up Name
    var startups = [];
    histories.forEach((ele) => {
        if (!startups.includes(ele.innerHTML)) {
            startups.push(ele.innerHTML);
        }
    });

    startups.forEach((ele) => {
        var dynamicContent = document.createElement("div");
        dynamicContent.innerHTML = `<div class="filter-name">
            <div class="startup-name">${ele}</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>`;
        filterCard.appendChild(dynamicContent);
    });

    //Filter section
    const filterName = document.querySelectorAll(".filter-name");
    const wrapperContainer = document.querySelector(".wrapper-container");
    const startupsCard = document.querySelectorAll(
        ".wrapper-container > .wrapper"
    );
    var selectedCompany = "";

    console.log(startupsCard);

    filterName.forEach((ele) => {
        ele.addEventListener("click", (e) => {
            selectedCompany = ele.querySelector(".startup-name").innerHTML;
            //console.log(selectedCompany);

            //startupsCard.forEach((ele) => {
            // console.log(ele.querySelector(".text > h2").innerHTML);
            //});
            const isAll = selectedCompany === "Filter" ? true : false;
            const sorted = sortByName(startupsCard, selectedCompany, isAll);
            wrapperContainer.innerHTML = "";
            sorted.forEach((ele) => {
                wrapperContainer.appendChild(ele);
            });

            resetHighlight(document.querySelectorAll(".startup-name"))

            selectedCompanyClass = ele.querySelector(".startup-name")
            selectedCompanyClass.classList.toggle("active")

            //Remove Filter Card
            filterCard.style.display =
            filterCard.style.display === "none" ||
            filterCard.style.display === ""
                ? "block"
                : "none";
        });
    });

    function sortByName(startups, target, isAll) {
        var result = [];
        if (isAll) {
            result = startups;
            return result;
        }
        startups.forEach((startup) => {
            if (startup.querySelector(".text > h2").innerHTML === target) {
                result.push(startup);
            }
        });

        return result;
    }

    function resetHighlight(names){
        names.forEach((name) => {
            name.classList.remove("active")
        })
    }
</script>
@endsection
