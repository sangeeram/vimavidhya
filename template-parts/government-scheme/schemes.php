<?php
/**
 * Schemes Directory Template Part with Clickable Links & Highlighted Story/Audience Content
 * Styled according to the Vima Vidya design system and reference layouts.
 */

$schemes = [
    [
        'id' => 'pmsby',
        'title' => '1. Pradhan Mantri Suraksha Bima Yojana (PMSBY)',
        'short_title' => 'PMSBY Scheme',
        'subtitle' => 'Personal Accident Insurance for every Indian — Just ₹20 a year',
        'icon' => '🛡️',
        'badge' => 'GOVERNMENT ACCIDENT SCHEME',
        'metrics' => [
            ['label' => 'ANNUAL PREMIUM', 'value' => '₹20'],
            ['label' => 'ACCIDENTAL DEATH / FULL DISABILITY', 'value' => '₹2 Lakh'],
            ['label' => 'PARTIAL DISABILITY', 'value' => '₹1 Lakh'],
            ['label' => 'ELIGIBILITY', 'value' => 'Age 18–70']
        ],
        'lead' => 'Accidents don\'t come with warnings. PMSBY is India\'s most affordable personal accident insurance — costing less than a newspaper subscription — that pays your family or nominee ₹2 lakh if an accident kills or permanently disables you.',
        'specs' => [
            ['Type', 'Government-backed Personal Accident Insurance'],
            ['Annual Premium', '₹20 per year (auto-debited from savings bank account)'],
            ['Accidental Death Benefit', '₹2,00,000 to Nominee'],
            ['Total Permanent Disability', '₹2,00,000 (loss of both eyes or both limbs)'],
            ['Partial Permanent Disability', '₹1,00,000 (loss of one eye or one limb)'],
            ['Eligibility', 'Age 18–70 years with savings bank / post office account'],
            ['Policy Period', 'June 1 to May 31 (renewable annually)'],
            ['How to Enrol', 'Bank branch, net banking, SMS | <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">jansuraksha.gov.in</a> (process and forms detailed)'],
            ['Administered by', 'Public Sector General Insurance Companies via banks']
        ],
        'links' => [
            ['title' => 'jansuraksha.in/pmsbyScheme', 'url' => 'https://jansuraksha.in/pmsbyScheme'],
            ['title' => 'jansuraksha.in/login', 'url' => 'https://jansuraksha.in/login'],
            ['title' => 'jansuraksha.gov.in (Enrol / Track / Claim)', 'url' => 'https://jansuraksha.gov.in'],
            ['title' => 'Forms & Guidelines', 'url' => 'https://jansuraksha.gov.in/Forms-PMSBY.aspx'],
            ['title' => 'FAQ & Support', 'url' => 'https://jansuraksha.gov.in/FAQ.aspx']
        ],
        'did_you_know' => 'As of April 2025, PMSBY has crossed 51 crore cumulative enrolments nationwide, with over ₹3,121 crore paid out to more than 1.57 lakh families (PIB, Ministry of Finance).',
        'tip' => 'You can hold only ONE PMSBY policy even across multiple bank accounts — enrolling twice does not double your cover, and the extra premium is simply wasted.',
        'story' => [
            'title' => "Ramu's Last Ride — A Story of Foresight",
            'text' => 'Ramu, a 32-year-old auto driver from Nagpur, enrolled in PMSBY in June 2022 after his bank manager mentioned it during a Jan Dhan account renewal. His <span class="vima-hl">annual premium</span> of just ₹20 was <span class="vima-hl">auto-debited</span> from his savings account — he barely noticed it.<br><br>In March 2024, a speeding truck jumped a signal and hit his auto. Ramu survived but lost his right hand permanently — a <span class="vima-hl">partial permanent disability</span> under the <span class="vima-hl">policy terms</span>.<br><br>His wife Sunita, named as the <span class="vima-hl">nominee</span> on his account, submitted a simple <span class="vima-hl">claim form</span> along with the discharge summary from the hospital. The <span class="vima-hl">insured peril</span> — an accidental injury causing permanent loss of a limb — was clearly included under the <span class="vima-hl">policy coverage</span>.<br><br>Within 30 days, the <span class="vima-hl">claim settlement</span> of ₹1,00,000 was credited directly to Sunita\'s bank account — no agent, no broker, no delays.<br><br>₹20 protected a family for an entire year. What does ₹20 buy you in the market today? Ramu knows the answer.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Every earning adult between 18 and 70</span> — rickshaw drivers, daily wage workers, farmers, IT professionals, homemakers',
            '<span class="vima-hl">Those with dependents</span> — spouse, children, ageing parents who rely on your income',
            '<span class="vima-hl">Physically risky occupations</span> — construction workers, truck drivers, factory workers',
            'Those who already have life insurance — PMSBY adds <span class="vima-hl">accident-specific protection</span> at near-zero cost'
        ],
        'considerations' => '<span class="vima-hl">Enrol before May 31</span> each year. Coverage runs June 1 to May 31. Ensure your bank account has ₹20 on that date or your policy lapses. Register only through one bank account even if you hold multiple accounts. Always keep your nominee details updated — outdated nominations are the single biggest cause of claim delays.',
        'claim_path' => [
            'Intimate your bank within 30 days of the accident',
            'Submit claim form + FIR / medical reports (proof of insured peril)',
            'Bank forwards to the insurer — insurer verifies sum insured and policy terms',
            'Claim settled to nominee\'s account via NEFT'
        ]
    ],
    [
        'id' => 'pmjjby',
        'title' => '2. Pradhan Mantri Jeevan Jyoti Bima Yojana (PMJJBY)',
        'short_title' => 'PMJJBY Life Scheme',
        'subtitle' => 'Life Insurance for ₹436 a year — Just ₹1.20 a day. No medical test. No paperwork maze.',
        'icon' => '🌙',
        'badge' => 'GOVERNMENT LIFE SCHEME',
        'metrics' => [
            ['label' => 'ANNUAL PREMIUM', 'value' => '₹436'],
            ['label' => 'SUM ASSURED', 'value' => '₹2 Lakh'],
            ['label' => 'WAITING PERIOD', 'value' => '45 Days'],
            ['label' => 'ELIGIBILITY', 'value' => 'Age 18–50']
        ],
        'lead' => 'Life is uncertain. PMJJBY is a government-backed group term life insurance scheme that pays your family ₹2 lakh if you die from ANY reason — accident, illness, natural causes. No medical underwriting or tests required. Available to anyone aged 18–50 with a savings bank account.',
        'specs' => [
            ['Type', 'Government-backed Group Term Life Insurance'],
            ['Annual Premium', '₹436 per year (auto-debited) — ~₹1.20 per day'],
            ['Sum Assured', '₹2,00,000 to nominee on death for ANY reason'],
            ['Eligibility', 'Age 18–50 years with savings bank or post office account'],
            ['Coverage continues till', 'Age 55 (if enrolled before 50)'],
            ['Waiting Period', '45 days from enrolment (only accidental death covered in first 45 days)'],
            ['Medical Test', 'Not required — simple consent and auto-debit mandate'],
            ['Policy Period', 'June 1 to May 31 (annual renewal)'],
            ['How to Enrol', 'Bank branch, net banking, SMS | <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">jansuraksha.gov.in</a>'],
            ['Administered by', 'LIC and life insurance companies via banks']
        ],
        'links' => [
            ['title' => 'jansuraksha.in/pmjjbyScheme', 'url' => 'https://jansuraksha.in/pmjjbyScheme'],
            ['title' => 'jansuraksha.in/login', 'url' => 'https://jansuraksha.in/login'],
            ['title' => 'jansuraksha.gov.in (Enrol / Track / Claim)', 'url' => 'https://jansuraksha.gov.in'],
            ['title' => 'LIC India Portal', 'url' => 'https://www.licindia.in']
        ],
        'did_you_know' => 'PMJJBY has recorded over 23.6 crore cumulative enrolments and settled claims worth more than ₹18,398 crore for over 9 lakh families as of April 2025 (PIB, Ministry of Finance).',
        'tip' => 'If you switch banks, you must re-enrol in PMJJBY at the new bank. The cover does not automatically transfer with your account.',
        'story' => [
            'title' => "Meena's Tomorrow — A Story of a Family Saved",
            'text' => 'Mohan, 41, a small garment shop owner in Surat, enrolled in PMJJBY after his bank sent an SMS. His wife Meena had no idea what the <span class="vima-hl">₹436 annual premium</span> auto-deducted each June was for. Mohan saw it as a small price for a big <span class="vima-hl">sum assured of ₹2 lakh</span>.<br><br>In August 2025, Mohan suffered a <span class="vima-hl">sudden cardiac arrest</span> and passed away. The insured event — death from any cause — was clearly within the scope of coverage.<br><br>Meena, the <span class="vima-hl">registered nominee</span>, visited the bank branch with Mohan\'s <span class="vima-hl">Death Certificate</span> and claim form.<br><br>Within 30 days, <span class="vima-hl">₹2,00,000</span> — the full death benefit — was transferred to Meena\'s account. ₹2 lakh could not replace Mohan. But it bought Meena time. Time to breathe. Time to plan.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Every individual between 18 and 50</span> who is the primary earning member of their family',
            '<span class="vima-hl">Young married couples</span> — even if both earn, the other needs protection if one is gone',
            '<span class="vima-hl">Self-employed and gig workers</span> — no employer life cover means this is your only safety net',
            'Anyone who has taken a <span class="vima-hl">home loan, education loan or vehicle loan</span>'
        ],
        'considerations' => '<span class="vima-hl">PMJJBY + PMSBY = Complete Protection at ₹456/Year</span>. Note the 45-day waiting period: Only accidental death is covered in the first 45 days after enrolment.',
        'claim_path' => [
            'Notify bank branch with Death Certificate and claim documents',
            'Bank verification and forwarding to life insurer',
            'Insurer validation of active status',
            'Direct transfer of ₹2,00,000 to nominee bank account'
        ]
    ],
    [
        'id' => 'pmfby',
        'title' => '3. Pradhan Mantri Fasal Bima Yojana (PMFBY)',
        'short_title' => 'PMFBY Crop Scheme',
        'subtitle' => "Crop Insurance: Protecting India's farmers from floods, drought, and nature's fury",
        'icon' => '🌾',
        'badge' => 'AGRICULTURE SCHEME',
        'metrics' => [
            ['label' => 'KHARIF PREMIUM', 'value' => '2%'],
            ['label' => 'RABI PREMIUM', 'value' => '1.5%'],
            ['label' => 'BUDGET 2025-26', 'value' => '₹12,242 Cr'],
            ['label' => 'ELIGIBILITY', 'value' => 'All Farmers']
        ],
        'lead' => "India's farmers face floods, droughts, hailstorms and pests — often all in the same year. PMFBY is the world's largest crop insurance scheme by farmer enrolments. Farmers pay just 2% - 5% of the sum insured for the crop — the government bears the rest.",
        'specs' => [
            ['Type', 'Government-backed Crop / Agricultural Insurance'],
            ['Farmer Premium — Kharif', 'Max 2% of Sum Insured (food crops, oilseeds)'],
            ['Farmer Premium — Rabi', 'Max 1.5% of Sum Insured (wheat, pulses, mustard)'],
            ['Commercial / Horticulture', 'Max 5% of Sum Insured'],
            ['Remaining Premium', 'Borne by Central and State Governments'],
            ['Sum Insured', 'Scale of Finance declared by District Level Technical Committee'],
            ['Eligibility', 'All farmers — owner, sharecropper, tenant — loanee and non-loanee'],
            ['Coverage Events', 'Prevented sowing, standing crop loss, post-harvest loss, localised calamity'],
            ['Technology', 'Satellite imagery, drones, remote sensing for faster claim assessment'],
            ['How to Enrol', '<a href="https://pmfby.gov.in" target="_blank" rel="noopener">pmfby.gov.in</a>']
        ],
        'links' => [
            ['title' => 'pmfby.gov.in (Enrol / Check Claim Status)', 'url' => 'https://pmfby.gov.in'],
            ['title' => 'Crop Insurance Helpline: 14447', 'url' => 'tel:14447']
        ],
        'did_you_know' => 'PMFBY now uses satellite imagery, drones and remote sensing (under the YES-TECH and WINDS initiatives) to speed up yield assessment and reduce disputes over claim amounts.',
        'tip' => 'Loanee farmers are enrolled automatically through their Kisan Credit Card, but you can opt out before the cut-off date each season if you do not want the premium deducted.',
        'story' => [
            'title' => "Govindappa's Ruined Crop — A Story of Resilience",
            'text' => 'Govindappa, 48, grows groundnut on 3 acres in Kalaburagi, Karnataka. Every June, when he walks into his cooperative bank to renew his <span class="vima-hl">Kisan Credit Card (KCC)</span>, the loan is automatically linked to <span class="vima-hl">PMFBY</span>.<br><br>In 2024, the Kharif season brought <span class="vima-hl">devastating drought</span> — an insured peril under PMFBY. His crop failed completely.<br><br>Within 30 days of the harvest season ending, Govindappa received a <span class="vima-hl">claim settlement of ₹28,000</span> directly into his bank account.<br><br>Without PMFBY he would have taken a moneylender loan at 36% interest. The insurance money saved him from a debt trap.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Prevented Sowing</span>: Compensation if adverse weather prevents crop planting at season start.',
            '<span class="vima-hl">Standing Crop Loss</span>: Comprehensive coverage against drought, floods, hailstorms, pests, and lightning.',
            '<span class="vima-hl">Post-Harvest Losses</span>: Coverage up to 14 days after harvest for crops left drying in fields.',
            '<span class="vima-hl">Localised Calamities</span>: Individual farm-level damage assessment for freak hailstorms or landslides.'
        ],
        'considerations' => 'Kharif Season deadline: July 31. Rabi Season deadline: December 31. Non-loanee farmers must enrol voluntarily at their bank or via <a href="https://pmfby.gov.in" target="_blank" rel="noopener">pmfby.gov.in</a>.',
        'claim_path' => [
            'Intimate crop damage within 72 hours to bank, insurance company, or via PMFBY app',
            'District-level verification via CCEs, satellite, and drone data',
            'Assessment validation and calculation of yield shortfall',
            'Direct claim payout credited to farmer\'s bank account'
        ]
    ],
    [
        'id' => 'pmjay',
        'title' => '4. Ayushman Bharat – PM Jan Arogya Yojana (PMJAY)',
        'short_title' => 'PMJAY Health',
        'subtitle' => "The world's largest free health insurance — ₹5 lakh per family, fully government-funded",
        'icon' => '🏥',
        'badge' => 'HEALTH ASSURANCE',
        'metrics' => [
            ['label' => 'PREMIUM', 'value' => '₹0 (100% Govt)'],
            ['label' => 'ANNUAL COVER', 'value' => '₹5 Lakh'],
            ['label' => 'HOSPITALS', 'value' => '36,000+'],
            ['label' => 'SENIORS (70+)', 'value' => 'All Covered']
        ],
        'lead' => 'No money. No hospital ID. No problem. Under PMJAY, eligible families walk into any empanelled hospital and receive cashless treatment up to ₹5 lakh per family per year — covering 1,300+ medical procedures. Zero premium for beneficiaries. 100% government-funded.',
        'specs' => [
            ['Type', 'Government-funded Cashless Health Insurance (Secondary & Tertiary Care)'],
            ['Premium to Beneficiary', 'ZERO — 100% funded by Central and State Governments'],
            ['Sum Insured', '₹5,00,000 per family per year (no cap on family size)'],
            ['Senior Citizens (70+)', 'All citizens 70+ get ₹5 lakh cover regardless of income'],
            ['Eligibility', 'SECC 2011 families + National Food Security Act (NFSA) beneficiaries + all citizens 70+'],
            ['Pre-existing Conditions', 'Covered from Day 1 — zero waiting period'],
            ['Hospital Network', '30,000+ empanelled public and private hospitals'],
            ['Ayushman Card', 'Free digital card via PMJAY portal, App, or CSC (<a href="https://beneficiary.nha.gov.in" target="_blank" rel="noopener">beneficiary.nha.gov.in</a>)'],
            ['Helpline', '14555 (Toll-free, 24x7)'],
            ['2026 Update', 'Scheme now operational in all 36 States/UTs']
        ],
        'links' => [
            ['title' => 'pmjay.gov.in (Main Portal)', 'url' => 'https://pmjay.gov.in'],
            ['title' => 'MyScheme AB-PMJAY', 'url' => 'https://www.myscheme.gov.in/schemes/ab-pmjay'],
            ['title' => 'beneficiary.nha.gov.in (Eligibility)', 'url' => 'https://beneficiary.nha.gov.in'],
            ['title' => 'National Health Authority (NHA)', 'url' => 'https://nha.gov.in']
        ],
        'did_you_know' => 'The empanelled hospital network under AB-PMJAY has grown to over 36,000 hospitals nationwide, and the scheme is now operational in all 36 States and UTs.',
        'tip' => "Carry a valid ID (Aadhaar, ration card) to the hospital's 'Ayushman Mitra' desk — they can verify eligibility and issue your e-card on the spot, even without a prior card.",
        'story' => [
            'title' => "Ramesh's Heart — Zero Rupees Out of Pocket",
            'text' => 'Ramesh, 52, a daily wage labourer from Jaipur, felt breathless during work. At a government hospital, the cardiologist said he needed bypass surgery costing <span class="vima-hl">₹2.3 lakh</span>. His son pulled out the <span class="vima-hl">Ayushman Card</span> on his phone.<br><br>At the hospital\'s Ayushman Mitra desk, staff verified Ramesh\'s beneficiary status on the <span class="vima-hl">PMJAY portal</span>.<br><br>The <span class="vima-hl">₹2,30,000 hospital bill</span> — covering operating theatre, ICU stay, surgeon fees, and medicines — was settled directly between the hospital and scheme.<br><br>Ramesh\'s out-of-pocket expenditure: <span class="vima-hl">₹0</span>.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">SECC 2011</span> rural/urban deprived households',
            '<span class="vima-hl">NFSA ration card holders</span> (Antyodaya and Priority households)',
            'All <span class="vima-hl">senior citizens aged 70 and above</span>, regardless of annual income'
        ],
        'considerations' => 'Exclusions: Outpatient (OPD) consultations, cosmetic procedures, fertility treatments, and organ donor costs are not covered under PMJAY.',
        'claim_path' => [
            'Visit empanelled hospital and approach the Ayushman Mitra desk',
            'Verify eligibility using mobile number, ration card, or Aadhaar',
            'Hospital submits electronic pre-authorisation request to State Health Agency',
            'Cashless treatment provided upon approval; zero payment at discharge'
        ]
    ],
    [
        'id' => 'arogya-sanjeevani',
        'title' => '5. Cashless Scheme by General Insurance Companies',
        'short_title' => 'Arogya Sanjeevani',
        'subtitle' => 'For those outside PMJAY — the Arogya Sanjeevani Policy makes comparing easy',
        'icon' => '💳',
        'badge' => 'STANDARD RETAIL HEALTH',
        'metrics' => [
            ['label' => 'SUM INSURED', 'value' => '₹1L – ₹25L+'],
            ['label' => 'NETWORK', 'value' => '10,000+ Hosps'],
            ['label' => 'GST (SEP 2025)', 'value' => '0% on Retail'],
            ['label' => 'REGULATOR', 'value' => 'IRDAI']
        ],
        'lead' => 'If you fall outside PMJAY eligibility — typically middle or higher-income families — private and public sector General Insurance companies offer individual and family floater health insurance policies with cashless treatment at network hospitals. IRDAI has mandated a standard product called Arogya Sanjeevani Policy with uniform terms across all insurers.',
        'specs' => [
            ['Type', 'Individual / Family Floater Health Insurance'],
            ['Standard Product', 'Arogya Sanjeevani Policy — uniform IRDAI-mandated terms'],
            ['Sum Insured Range', '₹1 lakh to ₹25 lakh (or more for comprehensive plans)'],
            ['Network Hospitals', 'Insurer-specific empanelled hospital network (10,000+ each)'],
            ['Cashless Mechanism', 'TPA (Third-Party Administrator) pre-authorises; hospital bills insurer directly'],
            ['Pre-existing Conditions', 'Covered after 3–4 year waiting period (check your policy)'],
            ['Co-payment', 'Some policies require you to bear 5–20% of the claim'],
            ['GST Update (Sep 2025)', 'NO GST on individual/family retail health insurance — premiums cheaper'],
            ['Regulator', 'IRDAI | <a href="https://www.irdai.gov.in" target="_blank" rel="noopener">irdai.gov.in</a> | Helpline: 155255']
        ],
        'links' => [
            ['title' => 'IRDAI Consumer Portal', 'url' => 'https://www.irdai.gov.in'],
            ['title' => 'Bima Bharosa (Grievance Portal)', 'url' => 'https://bimabharosa.irdai.gov.in'],
            ['title' => 'New India Assurance Arogya Sanjeevani', 'url' => 'https://www.newindia.co.in/health-insurance/arogya-sanjeevani-policy']
        ],
        'did_you_know' => 'Since September 2025, individual and family floater retail health insurance premiums no longer attract GST, making standard policies like Arogya Sanjeevani meaningfully cheaper.',
        'tip' => "Always confirm a hospital's 'network' status directly with your insurer's app or helpline before an emergency — networks can change and a wrong assumption can turn a cashless claim into a reimbursement headache.",
        'story' => [
            'title' => "Deepa's Discovery — The Policy That Was Always There",
            'text' => 'Deepa, 38, ran a tailoring business in Coimbatore. Her husband Kartik was a freelance electrician. When his mother needed cataract surgery, they paid ₹42,000 from savings.<br><br>A neighbour told them about <span class="vima-hl">Arogya Sanjeevani Policy</span> — an IRDAI-mandated standardised health insurance product, identical in terms across every insurer.<br><br>They bought a <span class="vima-hl">Family Floater</span> with a Sum Insured of ₹5 lakh. Annual Premium: ₹14,000.<br><br>Fourteen months later, Kartik needed emergency appendix surgery. Deepa paid <span class="vima-hl">₹0 at discharge</span>. Bill: ₹78,000.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Sum Insured</span>: Maximum insurer payout in a policy year (₹5 lakh minimum recommended).',
            '<span class="vima-hl">Waiting Period</span>: Pre-existing conditions covered after 3–4 continuous years.',
            '<span class="vima-hl">Sub-limits & Co-pay</span>: Check room rent caps and co-payment percentages before purchase.',
            '<span class="vima-hl">No-Claim Bonus (NCB)</span>: Sum insured increases by 10–50% at renewal for claim-free years.'
        ],
        'considerations' => 'Standardised product features ensure pricing and network hospital list are your main decision drivers.',
        'claim_path' => [
            'Notify TPA/insurer 48 hours prior for planned hospitalization or within 24 hours for emergencies',
            'Present health insurance card and ID proof at hospital insurance desk',
            'TPA reviews medical diagnosis and issues pre-authorisation',
            'Direct cashless settlement between insurer and hospital upon discharge'
        ]
    ],
    [
        'id' => 'bharat-yatra',
        'title' => '6. Bharat Yatra Suraksha',
        'short_title' => 'Bharat Yatra',
        'subtitle' => 'Standard Domestic Travel Insurance — protecting every journey in India, by any mode of transport',
        'icon' => '✈️',
        'badge' => 'DOMESTIC TRAVEL',
        'metrics' => [
            ['label' => '7-DAY TRIP', 'value' => '< ₹100'],
            ['label' => 'ACCIDENT COVER', 'value' => '₹1L – ₹1Cr'],
            ['label' => 'WAITING PERIOD', 'value' => 'Zero'],
            ['label' => 'TRANSPORT', 'value' => 'All Modes']
        ],
        'lead' => 'Every time you board a bus, train, airplane or taxi, you take a risk. IRDAI introduced Bharat Yatra Suraksha as India\'s standardized, single-premium domestic travel insurance policy — with uniform terms across all general insurers — making protection simple and affordable for every traveller.',
        'specs' => [
            ['Type', 'Standard Domestic Travel Insurance (IRDAI guidelines)'],
            ['Accidental Death Cover', '₹1 Lakh to ₹1 Crore (basic mandatory cover)'],
            ['Hospitalisation Cover', '₹1 Lakh to ₹10 Lakh'],
            ['Transport Covered', 'Cab, Bus, Train, Airplane, Ship, Ferry'],
            ['Add-On Options', 'Trip cancellation, missed flight, delayed/lost baggage'],
            ['Entry Age', 'Proposer 18+; children covered from Day 1'],
            ['Waiting Period', 'NONE — coverage begins from trip start'],
            ['How to Buy', 'All IRDAI-registered general insurance companies, online or offline']
        ],
        'links' => [
            ['title' => 'IRDAI Guidelines', 'url' => 'https://www.irdai.gov.in'],
            ['title' => 'Bima Bharosa Portal', 'url' => 'https://bimabharosa.irdai.gov.in']
        ],
        'did_you_know' => 'Because Bharat Yatra Suraksha has IRDAI-mandated uniform terms, you can compare premiums across insurers like-for-like — the coverage wording is identical, only the price differs.',
        'tip' => 'Buy the policy before you leave home, even for a short train or bus trip — cover typically cannot be backdated once the journey has started.',
        'story' => [
            'title' => 'The Chennai Express — A Story of Being Prepared',
            'text' => 'Suresh, 45, a Mumbai textile trader, travels by train to Chennai frequently. During a journey, the train derailed due to a track failure. Suresh fractured his collarbone and was hospitalised for 5 days.<br><br>His colleague, who had <span class="vima-hl">Bharat Yatra Suraksha</span>, contacted the travel assistance helpline and had the insurer arrange <span class="vima-hl">direct billing</span> with the nearest hospital.<br><br>The policy premium for a 7-day train journey: <span class="vima-hl">under ₹100</span>. Travel insurance is not about big trips. It is about any trip.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Frequent business travellers</span> and commuters using trains, buses, or flights',
            'Families undertaking <span class="vima-hl">holiday tours and road trips</span> across India',
            'Pilgrims and adventure tourists travelling to <span class="vima-hl">remote destinations</span>'
        ],
        'considerations' => 'Exclusions: Pre-existing disease hospitalisation during trip, self-inflicted injuries, and accidents under the influence of alcohol or drugs.',
        'claim_path' => [
            'Contact 24/7 travel assistance helpline provided by insurer',
            'Avail cashless hospitalisation at network medical facilities',
            'Submit travel tickets, boarding passes, and medical bills for reimbursement claims',
            'Settlement processed directly to bank account'
        ]
    ],
    [
        'id' => 'hit-and-run',
        'title' => '7. Hit & Run Motor Accident Compensation Scheme',
        'short_title' => 'Hit & Run Scheme',
        'subtitle' => 'When the vehicle flees — the State steps in. You don\'t need to know who hit you.',
        'icon' => '🚗',
        'badge' => 'STATUTORY COMPENSATION',
        'metrics' => [
            ['label' => 'DEATH COMP', 'value' => '₹2 Lakh'],
            ['label' => 'GRIEVOUS HURT', 'value' => '₹50,000'],
            ['label' => 'PREMIUM', 'value' => 'FREE (Statutory)'],
            ['label' => 'VICTIMS', 'value' => 'Any Victim']
        ],
        'lead' => 'When a vehicle causes an accident and the driver flees without being identified, victims are left with no one to claim from. The Hit and Run Motor Accident Compensation Scheme — administered by the General Insurance Council (GIC) — ensures that victims and families are NOT left empty-handed, even when the offending vehicle is never found.',
        'specs' => [
            ['Type', 'Statutory Compensation for Unidentified Vehicle Accident Victims'],
            ['Death Compensation', '₹2,00,000 (Revised w.e.f. April 1, 2022)'],
            ['Grievous Hurt', '₹50,000 for serious/permanent injury'],
            ['Who Administers', 'General Insurance Council | <a href="https://www.gicouncil.in" target="_blank" rel="noopener">gicouncil.in</a>'],
            ['Who Can Claim', 'Injured victim OR legal heir / dependent of deceased victim'],
            ['Claim Submission', 'Claims Settlement Commissioner of district where accident occurred'],
            ['Funding', 'Motor Vehicle Accident Fund (MVAF) — contributions from all general insurers'],
            ['Contact', 'hitandrunschemeclaims@gicouncil.in']
        ],
        'links' => [
            ['title' => 'GIC Insurance Education (Hit & Run)', 'url' => 'https://www.gicouncil.in/insurance-education/hit-and-run-motor-accidents/'],
            ['title' => 'Hit & Run Claims Portal', 'url' => 'https://hitandrunclaims.gicouncil.in']
        ],
        'did_you_know' => 'Compensation amounts were last revised with effect from April 1, 2022 — ₹2 lakh for death and ₹50,000 for grievous hurt — up sharply from the earlier ₹25,000 / ₹12,500 limits.',
        'tip' => 'File claim Forms I, II and IV within 6 months of the accident wherever possible; delays beyond the prescribed period can complicate your claim.',
        'story' => [
            'title' => "Kamala's Dark Road — A Story of an Unknown Driver",
            'text' => 'Kamala, 55, was cycling home when a speeding vehicle hit her and drove away. Her family had no vehicle registration number or witness details.<br><br>At the district hospital, a social worker told Kamala\'s son about the <span class="vima-hl">Hit & Run Compensation Scheme</span> under the Motor Vehicles Act: even if the third party is unidentified, statutory compensation is payable from the <span class="vima-hl">Motor Vehicle Accident Fund (MVAF)</span>.<br><br>Within 60 days, <span class="vima-hl">₹50,000</span> was transferred to the family\'s bank account via the GIC portal. You do not need to know who hit you to claim compensation in India.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Pedestrians, cyclists, and motorists</span> injured in accidents where the offending vehicle fled without trace',
            '<span class="vima-hl">Legal heirs of deceased victims</span> involved in unidentified hit-and-run road incidents'
        ],
        'considerations' => 'Requires filing an official police FIR and submitting Claim Forms I, II, and IV within the prescribed statutory timeframe.',
        'claim_path' => [
            'Report accident immediately to nearest police station and obtain FIR',
            'Collect hospital records proving grievous injury or death',
            'Submit Claim Form I, II, and IV to District Claims Settlement Commissioner',
            'Disbursement from MVAF credited directly to claimant bank account'
        ]
    ],
    [
        'id' => 'pm-rahat',
        'title' => '8. PM RAHAT — Golden Hour Scheme',
        'short_title' => 'PM RAHAT',
        'subtitle' => 'Free cashless treatment for ALL road accident victims — ₹1.5 lakh, 7 days. No insurance needed.',
        'icon' => '🚑',
        'badge' => 'GOLDEN HOUR STABILISATION',
        'metrics' => [
            ['label' => 'CASHLESS COVER', 'value' => '₹1.5 Lakh'],
            ['label' => 'DURATION', 'value' => '7 Days'],
            ['label' => 'PREMIUM', 'value' => 'FREE'],
            ['label' => 'GOOD SAMARITAN', 'value' => '₹25,000 Reward']
        ],
        'lead' => 'India loses nearly 50% of road accident fatalities because victims don\'t receive treatment within the first 60 minutes — known as the Golden Hour. PM RAHAT (Road Accident Victim Hospitalisation and Assured Treatment), launched nationally on February 14, 2026, gives any road accident victim free cashless treatment up to ₹1.5 lakh for 7 days.',
        'specs' => [
            ['Full Name', 'PM RAHAT — Road Accident Victim Hospitalisation & Assured Treatment'],
            ['Launched', 'February 14, 2026 (national rollout)'],
            ['Ministry', 'Ministry of Road Transport and Highways (<a href="https://morth.nic.in" target="_blank" rel="noopener">MoRTH</a>)'],
            ['Coverage', '₹1,50,000 per victim — cashless — for 7 days from accident date'],
            ['Stabilisation Period', '24 hours (non-life-threatening) / 48 hours (life-threatening)'],
            ['Eligible Victims', 'ANY person — driver, passenger, pedestrian, cyclist, foreigner'],
            ['Hospital Network', '30,000+ empanelled Ayushman Bharat hospitals'],
            ['Claim Paid Within', '10 working days of State Health Agency approval'],
            ['Good Samaritan Reward', '₹25,000 under Rah-Veer Scheme for citizens who assist victims']
        ],
        'links' => [
            ['title' => 'MoRTH Official Portal', 'url' => 'https://morth.nic.in'],
            ['title' => 'PIB Press Release Details', 'url' => 'https://pib.gov.in']
        ],
        'did_you_know' => 'PM RAHAT was notified under Section 162 of the Motor Vehicles Act, 1988, and formally launched nationwide in February 2026 — hospitals are legally barred from denying treatment or demanding upfront payment.',
        'tip' => 'Dial 112 at an accident scene — it is the number directly integrated with PM RAHAT\'s hospital-matching and cashless authorisation system.',
        'story' => [
            'title' => 'Vijay Stops His Car — A Story of the Golden Hour',
            'text' => 'At 11 PM on a highway near Nagpur, Vijay witnessed a motorcyclist thrown off his bike. The biker was unconscious and bleeding.<br><br>Vijay knew the <span class="vima-hl">Good Samaritan protections</span> meant no legal risk, and <span class="vima-hl">PM RAHAT</span> meant the hospital had to treat the victim <span class="vima-hl">without upfront cash deposits</span>.<br><br>He called 112 and drove the victim to the nearest empanelled hospital. Acute stabilisation surgery was covered under the <span class="vima-hl">₹1.5 lakh sum insured</span>.<br><br>Vijay received the <span class="vima-hl">Rah-Veer Good Samaritan reward of ₹25,000</span> the following month.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Any road accident victim in India</span> regardless of nationality or vehicle ownership',
            '<span class="vima-hl">Good Samaritans</span> assisting victims to medical facilities'
        ],
        'considerations' => 'Treatment is strictly cashless and hospitals cannot demand deposits or refuse emergency stabilization.',
        'claim_path' => [
            'Call 112 immediately for emergency dispatch and coordination',
            'Transport victim to nearest PM RAHAT / Ayushman Bharat empanelled hospital',
            'Hospital initiates digital cashless pre-authorisation (treatment first, paperwork later)',
            'Direct settlement between scheme fund and hospital'
        ]
    ],
    [
        'id' => 'aaby',
        'title' => '9. Aam Aadmi Bima Yojana (AABY)',
        'short_title' => 'AABY Unorganised',
        'subtitle' => "Life & Disability cover for India's unorganised sector workers — the original mass insurance scheme",
        'icon' => '👷',
        'badge' => 'LEGACY WORKER SCHEME',
        'metrics' => [
            ['label' => 'ANNUAL PREMIUM', 'value' => '₹200'],
            ['label' => 'NATURAL DEATH', 'value' => '₹30,000'],
            ['label' => 'ACCIDENTAL DEATH', 'value' => '₹75,000'],
            ['label' => 'STATUS', 'value' => 'Replaced by PMJJBY/PMSBY']
        ],
        'lead' => "Roughly 93% of India's workforce is in the unorganised sector — auto drivers, fishermen, cobblers, construction workers, rural landless — with no employer protection whatsoever. AABY was implemented by LIC of India to provide life and disability coverage.",
        'specs' => [
            ['Type', 'Life and Disability Insurance for Unorganised Sector'],
            ['Administered by', 'LIC of India (<a href="https://www.licindia.in" target="_blank" rel="noopener">licindia.in</a>)'],
            ['Annual Premium', '₹200 (₹100 from member + ₹100 from Govt Social Security Fund)'],
            ['Natural Death Benefit', '₹30,000 to nominee'],
            ['Accidental Death / Total Disability', '₹75,000 to nominee / member'],
            ['Partial Permanent Disability', '₹37,500 to member'],
            ['Eligibility', 'Age 18–59 years, BPL or marginal income, unorganised sector group'],
            ['Scholarship Add-On', '₹100/month per child (for up to 2 children) studying in 9th–12th standard'],
            ['Current Status', 'No new enrolments post-2017; PMJJBY + PMSBY are active successors']
        ],
        'links' => [
            ['title' => 'LIC India Official Portal', 'url' => 'https://www.licindia.in']
        ],
        'did_you_know' => 'AABY stopped taking new enrolments after 2017; PMJJBY and PMSBY now serve as its lower-cost, wider-eligibility successors.',
        'tip' => 'If your children are in classes 9–12 and you were an AABY member, ask your LIC branch whether the ₹100/month scholarship add-on is still active on your account.',
        'story' => [
            'title' => "Chinnathambi's Boat — A Story of the Sea's Uncertainty",
            'text' => 'Chinnathambi, 47, a fisherman from Nagapattinam, enrolled in AABY in 2015. During the monsoon, his boat capsized. He survived but permanently lost sight in one eye — classified as a <span class="vima-hl">partial permanent disability</span>.<br><br>LIC verified the insured event and settled <span class="vima-hl">₹37,500</span> within 45 days. His son Murugan\'s <span class="vima-hl">school scholarship benefit</span> also continued at ₹100 per month.<br><br>Today, PMJJBY and PMSBY carry that legacy forward at even lower premiums.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Legacy unorganised sector workers</span> holding active master policy memberships prior to 2017'
        ],
        'considerations' => 'New enrolments closed in 2017. Existing beneficiaries should transition to PMJJBY and PMSBY.',
        'claim_path' => [
            'Submit claim documents through designated nodal agency or LIC branch',
            'Verification of master policy records and medical/death certificates',
            'Direct credit of benefits and educational scholarships to beneficiary'
        ]
    ],
    [
        'id' => 'apy',
        'title' => '10. Atal Pension Yojana (APY)',
        'short_title' => 'Atal Pension',
        'subtitle' => 'Guaranteed monthly pension for life — start at ₹42/month. Government-backed. PFRDA-regulated.',
        'icon' => '🫙',
        'badge' => 'RETIREMENT PENSION',
        'metrics' => [
            ['label' => 'MIN CONTRIBUTION', 'value' => '₹42/month (age 18)'],
            ['label' => 'MONTHLY PENSION', 'value' => '₹1K – ₹5K'],
            ['label' => 'ELIGIBILITY', 'value' => 'Age 18–40 (non-taxpayers)'],
            ['label' => 'SUBSCRIBERS', 'value' => '7.6 Cr+']
        ],
        'lead' => 'Old age without income is one of the most frightening things an Indian can face. Atal Pension Yojana (APY) is a guaranteed government-backed retirement scheme for Indian citizens aged 18 to 40 who are not income-tax payers. It provides a fixed monthly pension of ₹1,000 to ₹5,000 for life, starting at age 60.',
        'specs' => [
            ['Type', 'Guaranteed Defined Benefit Pension Scheme'],
            ['Regulator', 'PFRDA | <a href="https://www.pfrda.org.in" target="_blank" rel="noopener">pfrda.org.in</a>'],
            ['Eligibility', 'Indian citizens aged 18–40 years (non-income tax payers)'],
            ['Monthly Pension Options', '₹1,000 / ₹2,000 / ₹3,000 / ₹4,000 / ₹5,000 per month'],
            ['Pension Starts At', 'Age 60 (minimum 20 years of contribution)'],
            ['Spouse Benefit', 'Same pension continues to spouse after subscriber\'s death'],
            ['Nominee Benefit', 'Accumulated corpus returned to nominee after both pass away'],
            ['Tax Benefit', 'Deductible under Sec 80CCD (1) — up to ₹50,000 additional per year'],
            ['How to Enrol', 'Bank branch, net banking, SMS | <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">jansuraksha.gov.in</a>']
        ],
        'links' => [
            ['title' => 'APY Forms & Guidelines', 'url' => 'https://jansuraksha.gov.in/Forms-APY.aspx'],
            ['title' => 'APY FAQ Portal', 'url' => 'https://jansuraksha.gov.in/FAQ.aspx'],
            ['title' => 'PFRDA APY Scheme Page', 'url' => 'https://www.pfrda.org.in/schemes/atal-pension-yojana-apy']
        ],
        'did_you_know' => 'APY has crossed 7.6 crore cumulative subscribers as of April 2025, making it one of the largest government-backed pension programmes in the world.',
        'tip' => 'You can increase or decrease your pension slab once a year — useful if your income changes.',
        'story' => [
            'title' => "Lakshmi's Silent Fear — A Story About Starting Early",
            'text' => 'Lakshmi, 22, is a domestic worker in Bengaluru earning ₹8,000 per month. Her biggest fear: "What happens to me when I am old?"<br><br>Her employer\'s daughter helped her open an <span class="vima-hl">APY account</span> at the local bank. Lakshmi chose the <span class="vima-hl">₹3,000/month pension option</span>. Her monthly contribution: ₹126 — <span class="vima-hl">auto-debited</span>.<br><br>When Lakshmi turns 60, she enters the vesting phase — <span class="vima-hl">₹3,000 every month, guaranteed for life</span>. If she lives to 85, she would receive over ₹9 lakh in pension payouts.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">All Indian citizens aged 18 to 40</span> seeking guaranteed lifelong retirement income',
            '<span class="vima-hl">Unorganised sector workers</span> and self-employed individuals outside formal PF schemes'
        ],
        'considerations' => 'Available only to non-income tax payers since October 1, 2022. Minimum 20-year contribution period required.',
        'claim_path' => [
            'Submit APY application form at bank branch or via net banking with Aadhaar and savings account',
            'Automatic monthly auto-debit of contribution from savings bank account',
            'Upon reaching age 60, pension initiates automatically to subscriber account'
        ]
    ],
    [
        'id' => 'saral-jeevan',
        'title' => '11. Saral Jeevan Bima',
        'short_title' => 'Saral Jeevan',
        'subtitle' => 'Standard term life insurance — same terms across every insurer, no fine print, no occupation bar',
        'icon' => '📜',
        'badge' => 'STANDARD TERM LIFE',
        'metrics' => [
            ['label' => 'SUM ASSURED', 'value' => '₹5L – ₹25L'],
            ['label' => 'ELIGIBILITY', 'value' => 'Age 18–65'],
            ['label' => 'POLICY TERM', 'value' => '5–40 yrs'],
            ['label' => 'INSURERS', 'value' => 'All Life Insurers']
        ],
        'lead' => 'Too many Indians avoided life insurance because policies were confusing, full of fine print, or excluded their occupation. IRDAI solved this with Saral Jeevan Bima — a standardised pure term life insurance product with identical features across ALL life insurance companies.',
        'specs' => [
            ['Type', 'Standard Pure Term Life Insurance (IRDAI mandated)'],
            ['Offered By', 'All licensed life insurers — identical policy terms'],
            ['Sum Assured', '₹5 Lakh to ₹25 Lakh (some insurers extend higher limits)'],
            ['Policy Term', '5 to 40 years'],
            ['Entry Age', '18 to 65 years'],
            ['Death Benefit', 'Lump sum Sum Assured to nominee on policyholder\'s death'],
            ['No Restrictions', 'Available regardless of gender, occupation, education, or residence'],
            ['No Maturity Benefit', 'Pure protection only — no survival or maturity benefit'],
            ['Premium Comparison', 'Compare at <a href="https://www.irdai.gov.in" target="_blank" rel="noopener">irdai.gov.in</a>']
        ],
        'links' => [
            ['title' => 'IRDAI Consumer Portal', 'url' => 'https://www.irdai.gov.in'],
            ['title' => 'Bima Bharosa Portal', 'url' => 'https://bimabharosa.irdai.gov.in'],
            ['title' => 'LIC Saral Jeevan Quote', 'url' => 'https://esales.licindia.in/CustomerQuote?plan=859']
        ],
        'did_you_know' => 'Saral Jeevan Bima has been available from every life insurer since January 1, 2021 — the product code across companies always ends in the same standard suffix.',
        'tip' => 'Because policy wording is identical across insurers, the smartest way to shop is purely on premium and claim settlement ratio.',
        'story' => [
            'title' => "Ravi's Protection Plan — A Story of Being Finally Found",
            'text' => 'Ravi, 52, owns a truck and drives it himself. Twice, agents declined his life insurance application because his occupation was deemed "high risk".<br><br><span class="vima-hl">Saral Jeevan Bima</span> changed everything. Under IRDAI\'s mandate, the product has <span class="vima-hl">no occupation exclusions</span>. Ravi selected a <span class="vima-hl">₹15 lakh sum assured</span> online in 20 minutes.<br><br>Two years later, Ravi had a fatal accident. His wife received <span class="vima-hl">₹15 lakh as the death benefit</span> within 30 days. No dispute. No rejection.'
        ],
        'who_should_take' => [
            '<span class="vima-hl">Individuals seeking pure financial protection</span> for dependents without complex riders',
            'Workers in self-employed or <span class="vima-hl">high-risk occupations</span> previously rejected by standard underwriting'
        ],
        'considerations' => 'Pure term insurance with no maturity return of premium. Compare premiums and claim settlement ratios across providers.',
        'claim_path' => [
            'Nominee intimates insurer upon policyholder demise with death certificate',
            'Insurer verifies policy status and nominee credentials',
            'Lump sum sum assured credited directly to nominee bank account within standard turnaround time'
        ]
    ]
];
?>

<div class="vima-schemes-directory-wrap">
    <div class="vima-container">
        
        <!-- Main Wrapper Card -->
        <div class="vima-master-card">
            
            <div class="vima-master-header">
                <h2>Schemes Directory: All 11 National Protections</h2>
                <p>Select any scheme from the options below to review its complete qualifications, protections, and coverage metrics.</p>
            </div>

            <!-- Sub-Navigation Pill Tabs Bar -->
            <nav class="vima-pill-tabs-nav" role="tablist" aria-label="Schemes Sub-Navigation">
                <?php foreach ($schemes as $index => $scheme): ?>
                    <button type="button" 
                            class="vima-pill-tab <?php echo $index === 0 ? 'active' : ''; ?>" 
                            role="tab" 
                            aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                            aria-controls="scheme-panel-<?php echo esc_attr($scheme['id']); ?>" 
                            id="tab-<?php echo esc_attr($scheme['id']); ?>"
                            data-target="<?php echo esc_attr($scheme['id']); ?>">
                        <span class="vima-tab-icon"><?php echo esc_html($scheme['icon']); ?></span>
                        <span class="vima-tab-title"><?php echo esc_html($scheme['short_title']); ?></span>
                    </button>
                <?php endforeach; ?>
            </nav>

            <!-- Active Scheme Content Container -->
            <div class="vima-scheme-content-container">
                <?php foreach ($schemes as $index => $scheme): ?>
                    <section class="vima-scheme-panel <?php echo $index === 0 ? 'active' : ''; ?>" 
                             id="scheme-panel-<?php echo esc_attr($scheme['id']); ?>" 
                             role="tabpanel" 
                             aria-labelledby="tab-<?php echo esc_attr($scheme['id']); ?>">
                        
                        <!-- Panel Hero Header -->
                        <div class="vima-panel-hero">
                            <div class="vima-badge-tag"><?php echo esc_html($scheme['badge']); ?></div>
                            <div class="vima-hero-icon-title">
                                <span class="vima-icon-badge"><?php echo esc_html($scheme['icon']); ?></span>
                                <div>
                                    <h3><?php echo esc_html($scheme['title']); ?></h3>
                                    <p class="vima-hero-subtitle"><?php echo esc_html($scheme['subtitle']); ?></p>
                                </div>
                            </div>

                            <!-- Metrics Grid -->
                            <div class="vima-metrics-grid">
                                <?php foreach ($scheme['metrics'] as $metric): ?>
                                    <div class="vima-metric-card">
                                        <div class="vima-metric-value"><?php echo esc_html($metric['value']); ?></div>
                                        <div class="vima-metric-label"><?php echo esc_html($metric['label']); ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <p class="vima-lead-text"><?php echo esc_html($scheme['lead']); ?></p>
                        </div>

                        <!-- Specifications Table -->
                        <div class="vima-specs-card">
                            <table class="vima-table">
                                <tbody>
                                    <?php foreach ($scheme['specs'] as $spec): ?>
                                        <tr>
                                            <td class="vima-spec-label"><?php echo esc_html($spec[0]); ?></td>
                                            <td class="vima-spec-value"><?php echo wp_kses_post($spec[1]); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Official Links & More Information (Clickable) -->
                        <div class="vima-info-box vima-links-box">
                            <h4>🔗 Official Links & More Information</h4>
                            <div class="vima-links-list">
                                <?php foreach ($scheme['links'] as $linkIdx => $linkItem): ?>
                                    <a href="<?php echo esc_url($linkItem['url']); ?>" target="_blank" rel="noopener" class="vima-external-link">
                                        <?php echo esc_html($linkItem['title']); ?>
                                    </a>
                                    <?php if ($linkIdx < count($scheme['links']) - 1): ?>
                                        <span class="vima-link-sep">|</span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Did You Know & Tip Boxes -->
                        <div class="vima-callout-grid">
                            <div class="vima-info-box vima-did-you-know">
                                <h4>📊 Did You Know</h4>
                                <p><?php echo esc_html($scheme['did_you_know']); ?></p>
                            </div>
                            <div class="vima-info-box vima-tip-box">
                                <h4>💡 Tip</h4>
                                <p><?php echo esc_html($scheme['tip']); ?></p>
                            </div>
                        </div>

                        <!-- Real-life Story Card -->
                        <?php if (!empty($scheme['story'])): ?>
                            <div class="vima-story-card">
                                <h4>📖 <?php echo esc_html($scheme['story']['title']); ?></h4>
                                <p><?php echo wp_kses_post($scheme['story']['text']); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Who Should Take It & Claim Path Grid -->
                        <div class="vima-grid-two-col">
                            <div class="vima-card-block">
                                <h4>Who Should Take It?</h4>
                                <ul class="vima-check-list">
                                    <?php foreach ($scheme['who_should_take'] as $item): ?>
                                        <li><?php echo wp_kses_post($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="vima-sub-block">
                                    <strong>When & What to Consider:</strong>
                                    <p><?php echo wp_kses_post($scheme['considerations']); ?></p>
                                </div>
                            </div>

                            <div class="vima-card-block vima-claim-block">
                                <h4>✅ Claim Path</h4>
                                <ol class="vima-numbered-list">
                                    <?php foreach ($scheme['claim_path'] as $step): ?>
                                        <li><?php echo esc_html($step); ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>

                    </section>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.vima-pill-tabs-nav .vima-pill-tab');
    const panels = document.querySelectorAll('.vima-scheme-content-container .vima-scheme-panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');

            tabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            panels.forEach(p => p.classList.remove('active'));

            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            
            const activePanel = document.getElementById('scheme-panel-' + targetId);
            if (activePanel) {
                activePanel.classList.add('active');
                document.querySelector('.vima-master-card').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });
    });
});
</script>