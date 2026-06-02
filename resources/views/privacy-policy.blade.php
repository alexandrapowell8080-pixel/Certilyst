<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Privacy Policy | Certilyst</title>

    <meta name="description"
        content="Read the Certilyst Privacy Policy to learn how we collect, use, protect, and manage your personal information when using our certification exam preparation services.">

    <meta name="keywords"
        content="Certilyst privacy policy, certification exam prep privacy, data protection, exam prep platform, user privacy">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url('/privacy-policy') }}">

    <meta property="og:title" content="Privacy Policy | Certilyst">
    <meta property="og:description"
        content="Learn how Certilyst collects, uses, protects, and safeguards your information.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/privacy-policy') }}">
    <meta property="og:site_name" content="Certilyst">
    <meta property="og:image" content="{{ asset('images/logo-1.png') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Privacy Policy | Certilyst">
    <meta name="twitter:description"
        content="Learn how Certilyst protects your privacy and manages your data.">
    <meta name="twitter:image" content="{{ asset('images/logo-1.png') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "PrivacyPolicy",
            "name": "Privacy Policy | Certilyst",
            "url": "{{ url('/privacy-policy') }}",
            "dateModified": "2026-05-19",
            "publisher": {
                "@@type": "Organization",
                "name": "Certilyst",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('images/logo-1.png') }}"
            },
            "description": "Certilyst Privacy Policy explaining how user information is collected, used, protected, and disclosed."
        }
    </script>
</head>

<body>

    @include('partials.nav-bar')

    <main>
        <section class="privacy-hero">
            <div class="privacy-hero-inner">
                <div class="privacy-badge">Privacy & Data Protection</div>

                <h1 class="privacy-title">Privacy Policy</h1>

                <p class="privacy-subtitle">
                    Certilyst is committed to protecting your privacy and helping you understand how your information is
                    collected, used, disclosed, and safeguarded when you use our website or services.
                </p>

                <div class="privacy-updated">Last Updated: May 19, 2026</div>
            </div>
        </section>

        <section class="privacy-section">
            <div class="privacy-container">
                <article class="privacy-card">
                    <div class="privacy-intro">
                        <p>
                            Certilyst ("we," "our," or "us") is committed to protecting your privacy. This policy
                            outlines how we collect, use, disclose, and safeguard your information when you use our
                            website or services. By accessing Certilyst, you agree to the terms of this policy.
                        </p>
                    </div>

                    <div class="privacy-content">
                        <section class="policy-block">
                            <h2>1. Information We Collect</h2>
                            <p>We may collect the following data:</p>
                            <ul>
                                <li>
                                    <strong>Personal Information:</strong>
                                    Name, email, contact details, and payment information processed securely via
                                    third-party processors such as Stripe or PayPal.
                                </li>
                                <li>
                                    <strong>Usage Data:</strong>
                                    IP address, browser type, device information, pages visited, and interactions
                                    through cookies and analytics tools such as Google Analytics.
                                </li>
                                <li>
                                    <strong>User Contributions:</strong>
                                    Exam responses, progress tracking, feedback, and related learning activity.
                                </li>
                            </ul>
                        </section>

                        <section class="policy-block">
                            <h2>2. How We Use Your Information</h2>
                            <p>Your data is used to:</p>
                            <ul>
                                <li>Provide and personalize exam preparation services.</li>
                                <li>Process transactions and send service-related communications.</li>
                                <li>Improve website functionality and user experience.</li>
                                <li>Comply with legal obligations and prevent fraud.</li>
                            </ul>

                            <div class="privacy-note">
                                <strong>Note:</strong> We do not sell your data to third parties.
                            </div>
                        </section>

                        <section class="policy-block">
                            <h2>3. Cookies and Tracking Technologies</h2>
                            <p>We use cookies to:</p>
                            <ul>
                                <li>Enhance site performance and remember user preferences.</li>
                                <li>Analyze trends through tools such as Google Analytics, with opt-out options where available.</li>
                                <li>Support third-party cookies, such as advertising networks, which may track usage according to their own policies.</li>
                            </ul>
                        </section>

                        <section class="policy-block">
                            <h2>4. Data Sharing and Disclosure</h2>
                            <p>We may share data with:</p>
                            <ul>
                                <li>
                                    <strong>Service Providers:</strong>
                                    Payment processors, hosting services, analytics providers, and related operational vendors.
                                </li>
                                <li>
                                    <strong>Legal Compliance:</strong>
                                    When required by law, subpoena, court order, or valid legal process.
                                </li>
                                <li>
                                    <strong>Business Transfers:</strong>
                                    In connection with mergers, acquisitions, restructuring, or asset transfers, with user notice where appropriate.
                                </li>
                            </ul>
                        </section>

                        <section class="policy-block">
                            <h2>5. Data Security</h2>
                            <p>We implement safeguards designed to protect user information, including:</p>
                            <ul>
                                <li>Encryption such as SSL/TLS for data transmission.</li>
                                <li>Regular security audits and access controls.</li>
                                <li>Secure storage through reputable cloud providers.</li>
                            </ul>

                            <div class="privacy-note">
                                Despite safeguards, no online platform is 100% secure. Users are encouraged to protect
                                their login credentials and use strong passwords.
                            </div>
                        </section>

                        <section class="policy-block">
                            <h2>6. Your Rights</h2>
                            <p>Depending on your location, including GDPR or CCPA-covered regions, you may:</p>
                            <ul>
                                <li>Access, correct, or request deletion of your data.</li>
                                <li>Opt out of marketing communications.</li>
                                <li>Withdraw consent where applicable.</li>
                                <li>Lodge complaints with a data protection authority.</li>
                            </ul>

                            <div class="contact-policy-box">
                                For privacy requests, contact:
                                <a href="mailto:support@certilyst.com">support@certilyst.com</a>
                            </div>
                        </section>

                        <section class="policy-block">
                            <h2>7. Third-Party Links</h2>
                            <p>
                                Certilyst may link to external websites. We are not responsible for their privacy
                                practices, content, or data handling. Please review their policies before sharing data.
                            </p>
                        </section>

                        <section class="policy-block">
                            <h2>8. Children's Privacy</h2>
                            <p>
                                We do not knowingly collect data from children under 13, or under 16 where GDPR applies.
                                Parents or guardians may contact us to request removal of such data.
                            </p>
                        </section>

                        <section class="policy-block">
                            <h2>9. Policy Updates</h2>
                            <p>
                                We may update this policy periodically. Changes will be posted on this page with a
                                revised "Last Updated" date. Continued use of Certilyst after updates constitutes
                                acceptance of the revised policy.
                            </p>
                        </section>

                        <section class="policy-block">
                            <h2>10. Contact Us</h2>
                            <p>
                                For questions or requests regarding this policy, please email:
                            </p>

                            <div class="contact-policy-box">
                                <a href="mailto:support@certilyst.com">support@certilyst.com</a>
                            </div>
                        </section>

                        <section class="policy-block">
                            <h2>Additional Notes for Certilyst</h2>
                            <ul>
                                <li>
                                    <strong>Exam Data:</strong>
                                    User-generated exam answers may be anonymized for analytics but not tied to personal identity.
                                </li>
                                <li>
                                    <strong>Payment Compliance:</strong>
                                    We adhere to PCI DSS standards for payment processing where applicable.
                                </li>
                                <li>
                                    <strong>User Consent:</strong>
                                    We use a cookie banner for EU users to support GDPR compliance.
                                </li>
                            </ul>
                        </section>
                    </div>
                </article>

                <div class="privacy-cta">
                    <h2>Continue Learning with Certilyst</h2>
                    <p>
                        Explore certification practice exams, flashcards, explanations, and study resources built to
                        help learners prepare with confidence.
                    </p>
                    <a href="{{ route('library') }}">Explore Exam Library</a>
                </div>
            </div>
        </section>
    </main>

    <script defer src="{{ asset('js/app.js') }}"></script>

    @include('partials.footer')

</body>

</html>