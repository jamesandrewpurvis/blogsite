@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h3>Timeline</h3>
    </div>

    <div class="timeline">
    <div class="timeline-table">
        <div class="side-icon">
            <i data-lucide="code" class="side-icon-icon"></i>
            2019-2022
            <p>School</p>
        </div>
        <div class="info-panel">
            <h6>Bachelor of Science in Software Development</h6>
            <div class="specification">
            <ul>
                <li>Completed my degree and built a strong foundation in programming and problem-solving.</li>
                <li>Gained hands-on experience with projects and capstones.</li>
                <li>Graduated in 2022 and prepared for the next chapter.</li>
            </ul>
            </div>
        </div>
    </div>
    <div class="timeline-table">
        <div class="side-icon">
            <i data-lucide="calculator" class="side-icon-icon"></i>
            2019-2022
            <p>School</p>
        </div>
        <div class="info-panel">
            <h6>Bachelor of Science in Accounting</h6>
            <div class="specification">
                <ul>
                    <li>Returned to school to pursue my  passion for accounting.</li>
                    <li>Building knowledge in financial reporting, taxation, auditing and more.</li>
                    <li>Graduated in June 2026 with a B.S in Accounting</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="timeline-table">
        <div class="side-icon">
            <i data-lucide="briefcase" class="side-icon-icon"></i>
            2019-2022
            <p>School</p>
        </div>
        <div class="info-panel">
            <h6>Looking for Opportunities</h6>
            <div class="specification">
                <ul>
                    <li>Actively seeking roles that combine both my tech & accounting skillsets!</li>
                    <li>Purusing a Master's Degree in Accounting with a Financial Reporting Specialiation</li>
                    <li>Studying to sit the CPA exam</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
@endsection
