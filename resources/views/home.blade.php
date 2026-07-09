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
            2024-2026
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
            Present
            <p>Seeking Employment</p>
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

    <div class="page-header">
        <h3>Skills</h3>
    </div>

        <div class="skills-row">
            <div class="skills-card">
                <div class="skills-circle">
                    <i data-lucide="code" class="skill-icon"></i>
                </div>
                <div class="skill-heading">
                    <h4>Programming</h4>
                </div>
                <div class="skill-list">
                    <div class="skills-item">
                        <i data-lucide="computer" class="skills-tiny-icon"></i>
                        <p>Java</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="shield-half" class="skills-tiny-icon"></i>
                        <p>C#</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="database" class="skills-tiny-icon"></i>
                        <p>Relational Databases</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="arrow-up-from-line" class="skills-tiny-icon"></i>
                        <p>Git/GitHub</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="heading-1" class="skills-tiny-icon"></i>
                        <p>Basic HTML</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="cpu" class="skills-tiny-icon"></i>
                        <p>Basic CSS</p>
                    </div>
                </div>
            </div>
            <div class="skills-card">
                <div class="skills-circle">
                    <i data-lucide="calculator" class="skill-icon"></i>
                </div>
                <div class="skill-heading">
                    <h4>Accounting</h4>
                </div>
                <div class="skill-list">
                    <div class="skills-item">
                        <i data-lucide="square-function" class="skills-tiny-icon"></i>
                        <p>Financial Accounting</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="folder-kanban" class="skills-tiny-icon"></i>
                        <p>Managerial Accounting</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="circle-dollar-sign" class="skills-tiny-icon"></i>
                        <p>Taxation</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="shield" class="skills-tiny-icon"></i>
                        <p>Auditing</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="sheet" class="skills-tiny-icon"></i>
                        <p>Microsoft Excel</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="flag" class="skills-tiny-icon"></i>
                        <p>Financial Reporting</p>
                    </div>
                </div>
            </div>
            <div class="skills-card">
                <div class="skills-circle">
                    <i data-lucide="code" class="skill-icon"></i>
                </div>
                <div class="skill-heading">
                    <h4>Other Skills</h4>
                </div>
                <div class="skill-list">
                    <div class="skills-item">
                        <i data-lucide="book-user" class="skills-tiny-icon"></i>
                        <p>Attention to Detail</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="info" class="skills-tiny-icon"></i>
                        <p>Problem Solving</p>
                    </div>
                    <div class="skills-item">
                        <i data-lucide="smile" class="skills-tiny-icon"></i>
                        <p>Self-Motivation</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="podcast" class="skills-tiny-icon"></i>
                        <p>Communication</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="brain" class="skills-tiny-icon"></i>
                        <p>Critical Thinking</p>
                    </div>

                    <div class="skills-item">
                        <i data-lucide="clock" class="skills-tiny-icon"></i>
                        <p>Time Management</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
