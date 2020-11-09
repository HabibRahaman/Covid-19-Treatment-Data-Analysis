-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2020 at 07:28 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `thumb` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `details`, `thumb`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Get parent and caregiver information', 'get-parent-and-caregiver-information', '<p>During this coronavirus outbreak, many parents and caregivers are feeling stressed or worried about lots of things, from staying healthy, keeping the family well, paying bills, caring for children who are homebound, and the list goes on. These kinds of worries can feel overwhelming and cause strong emotions. What can parents and caregivers do to cope with this unprecedented crisis?</p>\r\n<p>&nbsp;</p>\r\n<h3>Care for yourself so you can care for others</h3>\r\n<p>Caring for ourselves helps us to be ready and able to care for and nurture our children and those we love.&nbsp; During these difficult times, it is important to employ helpful coping strategies. Try to maintain a sense of routine as much as possible, prioritize your basic needs, and employ helpful coping strategies.&nbsp;</p>\r\n<p>In addition to eating healthy, getting enough sleep, and engaging in physical activity, nurturing and refueling yourself emotionally is critical. Take time to relax and find things that help you feel calm. These might include prayer, mindfulness, a warm shower, reading, or listening to music.&nbsp;</p>\r\n<p>If you are feeling especially stressed or overwhelmed, seek out professional help. Many mental health providers have the capacity to provide services via &ldquo;telehealth&rdquo; (i.e. therapy provided by phone or an online platform). Contact Michigan Medicine&rsquo;s Psychiatry Department at 734-764-0231 (toll free: 1-800-525-5188) or learn more about stress and coping during COVID-19.</p>\r\n<p>&nbsp;</p>\r\n<h3>Focus on what you can control</h3>\r\n<p>During this stressful, rapidly changing time, it may feel like many things are out of our control. In moments like this, it is helpful to take a step back, and consider the parts of our lives where we can make choices and can take positive action. We can feel more peaceful (and less worried!) when we recognize how we play an active role in helping ourselves, our families, and our communities.&nbsp;</p>\r\n<p>Understanding the facts about COVID-19 and being prepared can make an outbreak less stressful. Seek out news and information from trusted public health sources, such as the Centers for Disease Control and Prevention (CDC). Be sure to follow prevention guidelines, including washing your hands often, trying not to touch your face, covering your cough or sneeze, and maintaining 6-feet of space between those you don&rsquo;t live with.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3>Stay emotionally connected</h3>\r\n<p>Experts are recommending that we keep space between people &ndash; at least 6 feet. This is called social distancing and is an important way to reduce the spread of the coronavirus. However, keeping physical space between people does not mean emotional distancing! In fact, staying connected to friends and family will reduce your stress. Call a loved one or check in with your neighbor while maintaining at least 6-feet of space between you and them. It can be calming to simply think about the people you care about and draw on the strength of those connections. So, stay back, but keep your heart close.&nbsp;</p>\r\n<p>These are unprecedented times. But these times also create tremendous opportunities for us to practice our values &ndash; to care for others, connect with those we love, to find community and purpose wherever we can. This reminds us all of how connected we are to one another &ndash; and ultimately, we get through this together.</p>', NULL, 1, '2020-11-04 11:09:05', '2020-11-04 11:09:05'),
(3, 'What to do next? After tested as covid positive.', 'what-to-do-next-after-tested-as-covid-positive', '<p>If you test positive for COVID-19, or get sick after you are exposed to someone with COVID-19, you can help stop the spread of COVID-19 to others. Please follow the guidance below.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Symptoms of COVID-19</strong></h3>\r\n<p>Common symptoms are fever, cough, and shortness of breath. Other symptoms may include chills, muscle pain, headache, sore throat, and new loss of taste or smell.</p>\r\n<p>If you were exposed to someone who tested positive for COVID-19 and you have these symptoms, you might have COVID-19. Contact your healthcare provider for a COVID-19 test.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Participate in a public health interview</strong></h3>\r\n<p>An interviewer from public health will contact you if you test positive for COVID-19, usually by phone. The interviewer will help you understand what to do next and what support is available.</p>\r\n<p>The interviewer will ask for the names and contact information of people you have had close contact with recently. They ask for this information so they can notify people who may have been exposed. The interviewer will not share your name with your close contacts.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Stay home except to get medical care</strong></h3>\r\n<p>You should stay home except to get medical care. Do not go to work, school, or public areas. Avoid using public transportation, ride-sharing, or taxis. Ask friends or family members to do your shopping or use a grocery delivery service.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Call before you go to the doctor</strong></h3>\r\n<p>Tell your health care provider you have COVID-19, or are being evaluated for COVID-19. Put on a face covering before you enter the building. These steps will help keep people in the office or waiting room from getting sick.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Isolate yourself from people and animals in your home</strong></h3>\r\n<p>People: As much as possible, stay in a specific room away from other people and use a separate bathroom if available.</p>\r\n<p>Animals: Limit contact with pets and other animals. If possible, have a member of your household care for them. If you must care for an animal, wear a face covering and wash your hands before and after you interact with them. See COVID-19 and Animals for more information.</p>', NULL, 1, '2020-11-04 11:13:58', '2020-11-04 11:13:58'),
(4, 'How to protect myself against COVID-19?', 'how-to-protect-myself-against-covid-19', '<h3>Know how it spreads</h3>\r\n<ul>\r\n<li>There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19).</li>\r\n<li>The best way to prevent illness is to avoid being exposed to this virus.</li>\r\n<li>The virus is thought to spread mainly from person-to-person.</li>\r\n<li>Between people who are in close contact with one another (within about 6 feet).</li>\r\n<li>Through respiratory droplets produced when an infected person coughs, sneezes or talks.</li>\r\n<li>These droplets can land in the mouths or noses of people who are nearby or possibly be inhaled into the lungs.</li>\r\n<li>Some recent studies have suggested that COVID-19 may be spread by people who are not showing symptoms.<br /><br /></li>\r\n</ul>\r\n<h3>Everyone Should Wash your hands often</h3>\r\n<ul>\r\n<li>Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.</li>\r\n<li>It&rsquo;s especially important to wash:</li>\r\n<li>Before eating or preparing food</li>\r\n<li>Before touching your face</li>\r\n<li>After using the restroom</li>\r\n<li>After leaving a public place</li>\r\n<li>After blowing your nose, coughing, or sneezing</li>\r\n<li>After handling your mask</li>\r\n<li>After changing a diaper</li>\r\n<li>After caring for someone sick</li>\r\n<li>After touching animals or pets</li>\r\n<li>If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.</li>\r\n<li>Avoid touching your eyes, nose, and mouth with unwashed hands.<br />&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n<h3>Avoid close contact</h3>\r\n<ul>\r\n<li>Inside your home: Avoid close contact with people who are sick.</li>\r\n<li>If possible, maintain 6 feet between the person who is sick and other household members.</li>\r\n<li>Outside your home: Put 6 feet of distance between yourself and people who don&rsquo;t live in your household.</li>\r\n<li>Remember that some people without symptoms may be able to spread virus.</li>\r\n<li>Stay at least 6 feet (about 2 arms&rsquo; length) from other people.</li>\r\n<li>Keeping distance from others is especially important for people who are at higher risk of getting very sick.<br />&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n<h3>Cover your mouth and nose with a mask when around others</h3>\r\n<ul>\r\n<li>You could spread COVID-19 to others even if you do not feel sick.</li>\r\n<li>The mask is meant to protect other people in case you are infected.</li>\r\n<li>Everyone should wear a mask in public settings and when around people who don&rsquo;t live in your household, especially when other social distancing measures are difficult to maintain.</li>\r\n<li>Masks should not be placed on young children under age 2, anyone who has trouble breathing, or is unconscious, incapacitated or otherwise unable to remove the mask without assistance.</li>\r\n<li>Do NOT use a mask meant for a healthcare worker. Currently, surgical masks and N95 respirators are critical supplies that should be reserved for healthcare workers and other first responders.</li>\r\n<li>Continue to keep about 6 feet between yourself and others. The mask is not a substitute for social distancing.<br />&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n<h3>Cover coughs and sneezes</h3>\r\n<ul>\r\n<li>Always cover your mouth and nose with a tissue when you cough or sneeze or use the inside of your elbow and do not spit.</li>\r\n<li>Throw used tissues in the trash.</li>\r\n<li>Immediately wash your hands with soap and water for at least 20 seconds. If soap and water are not readily available, clean your hands with a hand sanitizer that contains at least 60% alcohol.<br />&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n<h3>Clean and disinfect</h3>\r\n<ul>\r\n<li>Clean AND disinfect frequently touched surfaces daily. This includes tables, doorknobs, light switches, countertops, handles, desks, phones, keyboards, toilets, faucets, and sinks.</li>\r\n<li>If surfaces are dirty, clean them. Use detergent or soap and water prior to disinfection.</li>\r\n<li>Then, use a household disinfectant. Most common EPA-registered household disinfectantsexternal icon will work.<br />&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n<h3>Monitor Your Health Daily</h3>\r\n<ul>\r\n<li>Be alert for symptoms. Watch for fever, cough, shortness of breath, or other symptoms of COVID-19.<br />Especially important if you are running essential errands, going into the office or workplace, and in settings where it may be difficult to keep a physical distance of 6 feet.</li>\r\n<li>Take your temperature if symptoms develop.</li>\r\n<li>Don&rsquo;t take your temperature within 30 minutes of exercising or after taking medications that could lower your temperature, like acetaminophen.</li>\r\n<li>Follow WHO guidance if symptoms develop.</li>\r\n</ul>', NULL, 1, '2020-11-04 11:24:32', '2020-11-04 11:28:19'),
(5, 'People with Certain Medical Conditions', 'people-with-certain-medical-conditions', '<p>Revisions were made on July 17, 2020 to reflect recent data supporting increased risk of severe COVID-19 among individuals with cancer. The listed underlying medical conditions in children were also revised to indicate that these conditions might increase risk to better reflect the quality of available data currently. We are learning more about COVID-19 every day, and as new information becomes available, CDC will update the information below. ​</p>\r\n<p>People of any age with certain underlying medical conditions are at increased risk for severe illness from COVID-19:</p>\r\n<p><strong>People of any age with the following conditions are at increased risk of severe illness from COVID-19:</strong></p>\r\n<ul>\r\n<li>Cancer</li>\r\n<li>Chronic kidney disease</li>\r\n<li>COPD (chronic obstructive pulmonary disease)</li>\r\n<li>Immunocompromised state (weakened immune system) from solid organ transplant</li>\r\n<li>Obesity (body mass index [BMI] of 30 or higher)</li>\r\n<li>Serious heart conditions, such as heart failure, coronary artery disease, or cardiomyopathies</li>\r\n<li>Sickle cell disease</li>\r\n<li>Type 2 diabetes mellitus</li>\r\n</ul>\r\n<p><br />COVID-19 is a new disease. Currently there are limited data and information about the impact of underlying medical conditions and whether they increase the risk for severe illness from COVID-19. Based on what we know at this time, people with the following conditions might be at an increased risk for severe illness from COVID-19:</p>\r\n<ul>\r\n<li>Asthma (moderate-to-severe)</li>\r\n<li>Cerebrovascular disease (affects blood vessels and blood supply to the brain)</li>\r\n<li>Cystic fibrosis</li>\r\n<li>Hypertension or high blood pressure</li>\r\n<li>Immunocompromised state (weakened immune system) from blood or bone marrow transplant, immune deficiencies, HIV, use of corticosteroids, or use of other immune weakening medicines</li>\r\n<li>Neurologic conditions, such as dementia</li>\r\n<li>Liver disease</li>\r\n<li>Pregnancy</li>\r\n<li>Pulmonary fibrosis (having damaged or scarred lung tissues)</li>\r\n<li>Smoking</li>\r\n<li>Thalassemia (a type of blood disorder)</li>\r\n<li>Type 1 diabetes mellitus</li>\r\n<li>Want to see the evidence behind these lists?<br /><br /></li>\r\n</ul>\r\n<p>Children who have medical complexity, who have neurologic, genetic, metabolic conditions, or who have congenital heart disease might be at increased risk for severe illness from COVID-19 compared to other children.</p>\r\n<p>The list of underlying conditions is meant to inform clinicians to help them provide the best care possible for patients, and to inform individuals as to what their level of risk may be so they can make individual decisions about illness prevention. We are learning more about COVID-19 every day. This list is a living document that may be updated at any time, subject to potentially rapid change as the science evolves</p>', NULL, 1, '2020-11-04 11:27:23', '2020-11-04 11:27:23'),
(6, 'When to seek emergency medical attention?', 'when-to-seek-emergency-medical-attention', '<p>Everyone should know the signs and symptoms of a medical emergency and the importance of seeking treatment immediately.</p>\r\n<p>We are all doing our part to help slow the spread during the COVID-19 pandemic. Physical distancing is important to prevent the spread of COVID-19, but it is equally important that you monitor your health and know when to seek emergency medical care for serious symptoms that are not related to COVID-19. You may be concerned about going to a hospital or urgent care site during this outbreak, when many people are seeking care for coronavirus. There are, however, some signs and symptoms of a medical emergency that you should always seek treatment for immediately.&nbsp;</p>\r\n<p><strong>Never avoid emergency rooms or wait to see a doctor if you feel your symptoms are truly serious.</strong></p>\r\n<p>Know the signs and symptoms of a medical emergency for which you should always seek treatment immediately.</p>\r\n<p>If you experience any of these symptoms, you should call 999 and/or go to the emergency room.&nbsp;</p>\r\n<p><strong>Examples of serious medical symptoms are:</strong></p>\r\n<ul>\r\n<li>Difficulty breathing, shortness of breath;</li>\r\n<li>Difficulty speaking;</li>\r\n<li>Sudden face drooping;</li>\r\n<li>Chest or upper abdominal pressure or pain;</li>\r\n<li>Confusion;</li>\r\n<li>Any sudden or severe pain;</li>\r\n<li>Uncontrolled bleeding; or</li>\r\n<li>Severe or persistent vomiting or diarrhea.</li>\r\n</ul>\r\n<p><br />If you are not sure whether your symptoms are serious enough that you need immediate medical attention, contact your usual healthcare provider. Many providers are offering virtual visits (telehealth services by phone or on your computer) as well as other remote ways to provide advice and care, during this outbreak. Your healthcare insurance program may offer a nursing advice line.</p>\r\n<p>If you do not have a routine healthcare provider, insurance, or internet access, contact the nearest emergency medical system by calling (Number).</p>', NULL, 1, '2020-11-04 11:31:19', '2020-11-04 11:31:19'),
(7, 'Transmission of COVID-19', 'transmission-of-covid-19', '<p>Currently available evidence indicates that COVID-19 may be transmitted from person to person through several different routes. In the scoping review published by La Rosa et al, the human coronaviruses primary transmission mode is person-to-person contact through respiratory droplets generated by breathing, sneezing, coughing, etc., as well as contact (direct contact with an infected subject or indirect contact, trough hand-mediated transfer of the virus from contaminated fomites to the mouth, nose, or eyes). Infection is understood to be mainly transmitted via large respiratory droplets containing the SARS-CoV-2 virus. Transmission through aerosols has also been implicated but the relative role of large droplets and aerosols is still unclear. Indirect transmission through fomites that have been contaminated by respiratory secretions is considered possible, although, so far, transmission through fomites has not been documented.</p>\r\n<p>Evidence on SARS-CoV-2 transmission is available from a recent animal study on ferrets, which are considered suitable animal models for human respiratory infections, that assessed transmission in an experimental setting. The findings suggest that direct transmission occurs between the animals, and the virus can be shed through multiple routes with rapid transmission to naive hosts in close contact with the infected hosts. The evidence of airborne transmission is considered less robust than the evidence of direct contact transmission between infected animals and na&iuml;ve animals.</p>\r\n<p>&nbsp;</p>\r\n<h3>Role of asymptomatic and pre-symptomatic individuals</h3>\r\n<p>Asymptomatic infection at time of laboratory confirmation has been reported from many settings. Some of these cases developed some symptoms at a later stage of infection. In a recent review, the proportion of positive cases that remained asymptomatic was estimated at 16%, with a range from 6 to 41%. In another systematic review, the pooled proportion of asymptomatic cases at time of testing was 25%. A majority of these cases developed symptoms later on, with only 8.4% of the cases remaining asymptomatic throughout the follow-up period. There are also reports of asymptomatic cases with laboratory-confirmed viral shedding in respiratory and gastrointestinal samples.</p>\r\n<p>Asymptomatic infection in children has been described in several large case series from China, which reported 4% to 28% asymptomatic paediatric cases among cases tested based on symptoms, signs or contact tracing. A systematic review presenting data on 2 914 paediatric patients with COVID-19 from China, Spain, Iran, the Republic of Korea and the United States identified 14.9% asymptomatic cases in children. Others have reported 18% asymptomatic cases in a meta-analysis of 551 laboratory-confirmed cases in children and 16% asymptomatic cases among a European cohort of 582 children.</p>\r\n<p>Similar viral loads in asymptomatic versus symptomatic cases have been reported, indicating the potential of virus transmission from asymptomatic patients. A community treatment center study (n=303) from Republic of Korea showed that RT-PCR Ct values for SARS-CoV-2 in asymptomatic patients (n=110, 36.3%) were similar to those in symptomatic patients. The median time from diagnosis to the first negative RT-PCR conversion was 17 days for asymptomatic patients and 19.5 days for symptomatic (including pre-symptomatic) patients. Viral loads in asymptomatic patients from diagnosis to discharge tended to decrease more slowly than those in symptomatic (including pre-symptomatic) patients.</p>\r\n<p>Asymptomatic transmission (i.e. when the infector has no symptoms throughout the course of the disease), is difficult to quantify. Available data, mainly derived from observational studies, vary in quality and seem to be prone to publication bias. Mathematical modelling studies (not peer-reviewed) have suggested that asymptomatic individuals might be major drivers for the growth of the COVID-19 pandemic.</p>\r\n<p>Pre-symptomatic transmission (i.e. when the infector develops symptoms after transmitting the virus to another person) has been reported. Exposure of secondary cases occurred 1&ndash;3 days before the source patient developed symptoms. It has been inferred through modelling that, in the presence of control measures, pre-symptomatic transmission contributed to 48% and 62% of transmissions in Singapore and China, respectively. Pre-symptomatic transmission was deemed likely based on a shorter serial interval of COVID-19 (4.0 to 4.6 days) than the mean incubation period (five days).</p>\r\n<p>Major uncertainties remain with regard to the impact of pre-symptomatic transmission on the overall transmission dynamics of the pandemic, which is mainly based on the limited evidence on transmission from asymptomatic cases from case reports and modelling.</p>\r\n<p>&nbsp;</p>\r\n<h3>Transmission in children</h3>\r\n<p>Available evidence to date indicates that children most probably contract COVID-19 in their households or through contact with infected family members, particularly in countries where school closures and strict physical distancing has been implemented.</p>\r\n<p>In a publication from Italy, exposure to SARS-CoV-2 from an unknown source or from a source outside the child&rsquo;s family accounted for 55% of the cases of infection [54], while in another Italian cohort, contact with a SARS-CoV-2 infected person outside the family was rarely reported and 67.3% (113/168) of children had at least one parent who tested positive for SARS-CoV-2 infection. Two studies on household transmission estimated the household secondary attack rate&nbsp; to be 16.3% [56] and 13.8%. Age-stratified analysis showed that the secondary attack rate &nbsp; in symptomatic children was 4.7% compared with 17.1% in adults (&ge; 20 years of age) [56], and that the probability of infection in children was 0.26 times lower (95%CI 0.13-0.54) than in elderly people (&ge; 60 years of age).</p>\r\n<p>In a manuscript (as yet not peer reviewed) relating to contact tracing efforts carried out during school closures in Trento, Italy, the attack rate among contacts of 0-14 year old cases was 22.4%, which is higher than that of working-age adults (approximately 13.1%) . In this study, not all asymptomatic contacts were tested. South Korea has permissive testing recommendations for contacts identified during contact tracing, meaning that more secondary cases are identified among children than in other settings. The attack rate among household contacts of index cases aged 0-9 years and 10-19 years was 5.3% and 18.6%, respectively, indicating transmission potential in both children and adolescents, and possibly more effective transmission in adolescents than in adults. These results support the transmission potential of children, in household settings.</p>\r\n<p>A recent report from US provides additional evidence of the role of children and adolescents in transmission. This study reported an overall attack rate of 44% among attendees (i.e. children, adolescents and adults) of an overnight camp where a teenage staff was the index case. The age-stratified attack rates were 51% among those aged 6-10 years; 44% among those aged 11-17 years and 33% among those aged 18-21 years [60]. Asymptomatic infections were observed in 26% of those with available test results and symptom data[60]. These findings indicate that children and adolescents can spread efficiently the virus, particularly in an indoor and overnight setting.</p>\r\n<p>Data from Germany showed that in symptomatic children, initial SARS-CoV-2 viral loads at diagnosis are comparable to those in adults and that symptomatic children of all ages shed infectious virus in early acute illness. In this study, also infectious virus isolation success was comparable to that of adults. The youngest patient from whom SARS-CoV-2 was isolated was a seven-day old neonate. In another non peer-reviewed publication, it was also shown that there is no significant difference between viral loads in persons 1-20 years of age in comparison to adults 21-100 years of age. Further, another study suggests that the viral load in children below 5 years of age with mild to moderate COVID-19 symptoms is higher compared to older children and adults.</p>\r\n<p>&nbsp;</p>\r\n<h3>Transmission risks in different settings</h3>\r\n<p>Several outbreak investigation reports have shown that COVID-19 transmission can be particularly effective in crowded, confined indoor spaces . Transmission can be linked with to specific activities, such as singing in a choir [64]. In a 2.5 hour choir practice in Washington, US, there were 32 confirmed and 20 probable secondary COVID-19 cases among 61 participants (85.2%). The duration of the indoor activity and the increased production of respiratory droplets through loud speech and singing, likely increased the risk of transmission.</p>\r\n<p>Poor ventilation in confined indoor spaces is associated with increased transmission of respiratory infections and COVID-19 in particular. In a restaurant outbreak of 10 cases in three families in Guangzhou, China,&nbsp; transmission was attributed to the spread of respiratory droplets carrying SARS-CoV-2 by the airflow generated by the air-conditioning. Similarly, two other outbreaks from China in January 2020 attribute air conditioning systems using a re-circulating mode as a likely aid to transmission [66]. Well-maintained, heating, ventilation, and air conditioning systems may have a complementary role in decreasing transmission in indoor spaces by increasing the rate of air change, decreasing recirculation of air and increasing the use of outdoor air.</p>\r\n<p>Multiple outbreaks of COVID-19 have been observed in several occupational settings within and beyond the EU/EEA and the UK, including slaughterhouses, meat processing plants, mines and building sites.&nbsp; Possible factors contributing to clusters and outbreaks in occupational settings are:</p>\r\n<p><strong>Working in confined indoor spaces:</strong> Studies have shown that in Europe &gt;80% of working time is spent indoors and that variations in the socioeconomic and demographic status lead to different work-day patterns indoors. Participating in meetings and sharing the same office space has been reported in literature as a risk factor for contracting COVID-19.<br /><br /><strong>Lack of social distancing:</strong> Outbreaks in different workplaces have been described when there were difficulties maintaining the recommended distance of at least two metres. Sharing facilities (e.g. canteen and dressing rooms ), transport and accommodation may also contribute to transmission.<br /><br /><strong>Close/direct contact with COVID-19 cases:</strong> Healthcare workers are known to be at greater risk of occupational exposure to biological agents, particularly infectious pathogens such as TB, influenza, SARS, measles etc. In a UK study of more than 120 000 employed persons, the risk of healthcare workers testing positive for COVID-19 was over seven times higher than for non-essential workers, and those in social care had a risk that was three times higher. Further specific occupations which are probably at risk of exposure to COVID-19 include transport workers (taxi and bus drivers), sales people, postal/package delivery workers and domestic cleaners, due to the fact that they are exposed to multiple clients. A study from Sweden that looked at cases of COVID-19 diagnosed in different occupations found the highest risk among taxi drivers, with a relative risk of being diagnosed with COVID-19 that was 4.8 times higher than in all other professions (95% confidence interval 3.9-6) followed by bus and tram drivers (RR 4.3, 95% CI 3.6&ndash;5.1).<br /><br /><strong>Insufficient or incorrect use of protective personal equipment (PPE):</strong> Some work sites where outbreaks have occurred have been slow to implement appropriate infection control and hygiene standards or have done so inadequately.&nbsp; Insufficient access to PPE has been identified as an additional risk factor. A systematic review and meta-analysis of 172 observational studies both in healthcare settings and the community, that looked into the effect of distance from the source patient and the use of respiratory and eye protection in the risk of transmission of SARS-CoV, MERS-CoV and SARS-CoV-2, concluded that physical distancing of at least one metre, use of face masks and eye protection were associated with a much lower risk of transmission.<br /><br /><strong>&lsquo;Presenteeism&rdquo; (i.e. reporting to work despite being symptomatic for a disease):</strong> Fear of losing their job or inability to reduce their working hours in order to stay home may lead to continued commuting and working, even when the employee or a family member are exhibiting symptoms compatible with COVID-19.<br />Further information on outbreaks in occupational settings in the EU/EEA can be found in the ECDC technical report on this topic.</p>\r\n<p><strong>Child-to-child transmission:</strong> Available evidence appears to suggest that transmission among children in schools is less efficient for SARS-CoV-2 than for other respiratory viruses such as influenza. However, this evidence is mainly derived from school outbreaks, which tend to rely on detecting symptomatic cases only and will therefore underestimate the number of infected, asymptomatic, and potentially infectious children in these outbreaks. No evidence of secondary cases among child or adult contacts of confirmed paediatric cases was found in contact tracing studies from France, Ireland and Finland. In Australia, a contact tracing study in 15 primary and high schools, where nine student COVID-19 cases were detected, found one secondary positive case in a primary school student (out of 735 close child contacts who were followed up).</p>\r\n<p>In Singapore, two preschools and one secondary school identified child index cases and tested close contacts. In a case where a preschool child was the index case (mean age 4.9 years), 34 preschool student contacts developed potential COVID-19 symptoms during the incubation period, however all 34 symptomatic cases tested negative for SARS-CoV-2. In a case where the index child was in secondary school (mean age 12.8 years), a total of eight out of 77 students developed symptoms and were screened for SARS-CoV-2 during the incubation period. All eight symptomatic student contacts from the school tested negative.</p>\r\n<p>In Israel, a first large school outbreak emerged ten days after re-opening all schools with requirement for daily health reports, hygiene, face masks, social distancing and minimal interaction between classes. The first two cases were registered on 26 May and 27 May, having no epidemiological link. Testing of the complete school community revealed 153 students (attack rate: 13.2%) and 25 staff members (attack rate: 16.6%) who were COVID-19 positive. Overall, some 260 persons were infected (students, staff members, relatives and friends).</p>\r\n<p><strong>Child-to-adult transmission:</strong> Currently available evidence indicates that children are not the primary drivers of SARS-CoV-2 transmission to adults in the school setting. Where COVID-19 in children was detected and contacts followed-up, no adult contacts in the school setting have been detected as SARS-CoV-2 positive during the follow-up period.</p>\r\n<p><strong>Adult-to-child transmission:</strong> There is very little documented evidence of potential transmission from adults to children within the school setting. In Ireland, three adult cases had a total of 102 child contacts that did not result in detection of any secondary child cases although, only symptomatic individuals were referred for follow-up testing. The outbreak in a high school in Israel did not specify the age of the index cases, making identification of adult-to-student transmission within the school setting impossible without further information. In Australia, a contact tracing study in 15 primary and high schools where nine staff-member-COVID-19 cases were detected found one secondary positive case in a secondary school student (among 735 child close contacts who were followed up). In Finland, following exposure to an infected teacher, seven out of 42 exposed students developed antibodies or were PCR positive, however household or community transmission may have been the source in some of these.</p>\r\n<p><strong>Adult-to-adult transmission:</strong> There is limited evidence within the peer-reviewed literature documenting transmission between adults within the school setting. Studies from Sweden&nbsp; and Chile indicate that adults are not at higher risk of SARS-CoV-2 within the school setting than the risk in the community or household.</p>\r\n<p>Further information on role of children and school settings in COVID-19 transmission can be found in the ECDC technical report on this topic</p>', NULL, 1, '2020-11-04 11:36:19', '2020-11-04 11:36:19'),
(8, 'How to treat yourself at home', 'how-to-treat-yourself-at-home', '<p>If you have just been diagnosed with coronavirus (COVID-19), you and your doctor may decide that your best option for care is to recover at home.</p>\r\n<p>This general guidance should not replace the instructions given to you by your doctor or healthcare provider. If this general guidance is different, be sure to follow the instructions provided by your doctor or healthcare provider to safely manage your care at home and help limit the spread of coronavirus (COVID-19) to others.</p>\r\n<p>The following are general tips to help you minimize the spread of coronavirus (COVID-19), feel better and recover, and understand when to reconnect with your doctor or healthcare provider.</p>\r\n<p>You should follow these recommendations until at least 7 days after you start having symptoms and at least 3 days after you no longer have a fever and shortness of breath.</p>\r\n<p>&nbsp;</p>\r\n<h3>Avoid contact with others as much as possible</h3>\r\n<p>Coronavirus (COVID-19) is spread through respiratory droplets when an infected person coughs or sneezes. Family members or anyone living in the household with a person who is infected have a high risk of getting the disease because of the prolonged close contact. While you are ill, try to limit your contact with other people in your household and outside.</p>\r\n<p>Cover your mouth and nose when you sneeze or cough, or wear a face mask when in the same room as another person. Frequently disinfect surfaces. As much as possible, try to stay in another room, separate&nbsp; from others in the household, including sleeping in another room. Limit the number of people that come into contact with you.</p>\r\n<p>Stay home unless you need to seek medical care. Ask family members or friends to shop for your groceries and other supplies.</p>\r\n<p>&nbsp;</p>\r\n<h3>Feel better and recover faster</h3>\r\n<p>The most common symptoms of coronavirus (COVID-19) are cough, fever, shortness of breath, and fatigue. As you likely know, antibiotics have no role in treating this viral infection. The treatment begins with supportive care like you would do if you have the flu. It is very important to make sure you get plenty of rest and drink plenty of fluids so that you don\'t get dehydrated. Avoid drinking caffeinated beverages (such as coffee, teas and sodas) and alcoholic beverages because they can lead to dehydration.</p>\r\n<p>Acetaminophen (such as Tylenol) should be used for fever and body aches. Make sure to talk&nbsp; with your doctor or healthcare provider if you have any underlying health conditions that might prevent you from taking acetaminophen products safely.</p>\r\n<p>Acetaminophen won&rsquo;t cure COVID-19, but it can help you feel better while your body finishes fighting the infection. Follow the recommendations on the medication label. Taking higher doses won\'t help and can cause other problems. There have been reports of patients that have used ibuprofen (such as Motrin or Advil) for symptoms and who later developed pneumonia. So, the current general recommendation is to use acetaminophen to treat symptoms of COVID-19.</p>\r\n<p>If you have a cough, it is fine to use over-the-counter cough medicines. These medicines won\'t cure the virus, but they will help you feel better while you recover.</p>\r\n<p>&nbsp;</p>\r\n<h3>Contact your doctor or healthcare provider if:</h3>\r\n<ul>\r\n<li>You experience a change in your symptoms or condition</li>\r\n<li>Your symptoms get worse rather than getting better</li>\r\n<li>You notice worsening of shortness of breath, or if you notice a change in your cough such that it is now producing more sputum or a change in the sputum produced</li>\r\n<li>You were getting better but now your symptoms are worse again (many patients who get the sickest don&rsquo;t get worse until after day 5 of the illness)</li>\r\n<li>If you are experiencing a life-threatening emergency or if you are experiencing severe symptoms, go directly to the ER or call 999</li>\r\n</ul>', NULL, 1, '2020-11-04 11:39:10', '2020-11-04 11:39:10'),
(9, 'Mental health in pandemic', 'mental-health-in-pandemic', '<p>Fear, worry, and stress are normal responses to perceived or real threats, and at times when we are faced with uncertainty or the unknown. So it is normal and understandable that people are experiencing fear in the context of the COVID-19 pandemic.</p>\r\n<p>Added to the fear of contracting the virus in a pandemic such as COVID-19 are the significant changes to our daily lives as our movements are restricted in support of efforts to contain and slow down the spread of the virus. Faced with new realities of working from home, temporary unemployment, home-schooling of children, and lack of physical contact with other family members, friends and colleagues, it is important that we look after our mental, as well as our physical, health.</p>\r\n<p>WHO, together with partners, is providing guidance and advice during the COVID-19 pandemic for health workers, managers of health facilities, people who are looking after children, older adults, people in isolation and members of the public more generally, to help us look after our mental health.</p>\r\n<p>Further materials relating to looking after our mental health during the COVID pandemic will be added to this page as they become available.</p>\r\n<p>You can also follow @WHO on our social media channels for the latest information.</p>', NULL, 1, '2020-11-04 11:41:24', '2020-11-04 11:41:24'),
(10, 'When to see a doctor about COVID-19', 'when-to-see-a-doctor-about-covid-19', '<p>Chances are you have lots of procedures in place to protect yourself from the novel coronavirus.</p>\r\n<ul>\r\n<li>You&rsquo;re staying home except for truly essential errands, going for walks with plenty of distance between yourself and others.</li>\r\n<li>You know how to clean anything brought into the house and you&rsquo;re giving soap and water a workout like never before.</li>\r\n</ul>\r\n<p><br />But few of us have prepared for how we&rsquo;ll react if we start feeling sick and suspect we have COVID-19, the disease caused by the virus.</p>\r\n<ul>\r\n<li>At what point do I call a doctor?</li>\r\n<li>Should I head to an emergency room?</li>\r\n</ul>\r\n<h3><br />When to call a doctor</h3>\r\n<p><br />If you learn that you have been exposed to someone who has tested positive for the virus or who has become sick, stay inside and monitor yourself for any symptoms for the next 14 days, UCI Health infectious disease experts advise.</p>\r\n<p><strong>Call your doctor\'s office if you develop the signature symptoms associated with COVID-19, including:</strong></p>\r\n<ul>\r\n<li>Fever (above 100.4 Fahrenheit)</li>\r\n<li>New cough</li>\r\n<li>New shortness of breath</li>\r\n</ul>\r\n<p><br /><strong>Before fever and lower respiratory symptoms emerge, other symptoms often occur, say UCI Health experts. They include:</strong></p>\r\n<ul>\r\n<li>Sore throat</li>\r\n<li>Headache</li>\r\n<li>Diarrhea</li>\r\n<li>Nausea or vomiting</li>\r\n<li>Loss of smell or taste</li>\r\n</ul>\r\n<p><br />If you develop a fever, cough or shortness of breath, call your healthcare provider&rsquo;s office. Your doctor will determine whether you should be seen by a physician, tested, go immediately to a medical facility or care for yourself at home.</p>\r\n<p>&nbsp;</p>\r\n<h3>When symptoms are severe</h3>\r\n<p>If symptoms become severe &mdash; especially if you are having trouble breathing, have pain or pressure in the chest, bluish lips or feel confused &mdash; call 999 or go to your nearest emergency department.</p>\r\n<p>It&rsquo;s vital to call ahead to let healthcare personnel know you&rsquo;re coming and what your symptoms are, says the U.S. Centers for Disease Control and Prevention (CDC).&nbsp;</p>\r\n<p>Wear a mask before entering the emergency department. If you do not have a mask, ask for one when you arrive. This is necessary to protect yourself, healthcare personnel and other patients.</p>\r\n<p>Once you have been assessed, the physician will determine what additional care is needed.</p>', NULL, 1, '2020-11-04 11:44:29', '2020-11-04 11:44:29'),
(11, 'How to care for someone with early symptoms?', 'how-to-care-for-someone-with-early-symptoms', '<p>If a person is caring for someone with early symptoms of coronavirus infection, they should ensure they follow guidelines to protect themselves and the care receiver.</p>\r\n<p><strong>These can include:</strong></p>\r\n<ul>\r\n<li>helping the care receiver follow any instructions from a doctor</li>\r\n<li>keeping them hydrated</li>\r\n<li>helping with groceries, prescriptions, and other requirements</li>\r\n<li>caring for any pets</li>\r\n<li>providing the care receiver with OTC medications when appropriate</li>\r\n<li>monitoring their symptoms and looking for signs that they may need more medical help</li>\r\n<li>washing cloth face masks after use</li>\r\n<li>monitoring their own health for coronavirus symptoms</li>\r\n<li>wearing disposable gloves when washing the care receiver&rsquo;s dirty laundry</li>\r\n<li>cleaning and disinfecting surfaces daily</li>\r\n<li>using a separate bedroom and bathroom from the care receiver</li>\r\n<li>ensuring good air ventilation to reduce chances of getting the virus<br /><br /><br />The person giving care should make sure they limit contact, as much as possible, with the individual they are caring for.</li>\r\n</ul>\r\n<p>The carer should wear a face mask when near the sick person, and gloves if they come into contact with their blood, stool, or bodily fluids.</p>\r\n<p>If the care receiver is trouble breathing easily, they should also always wear a face mask when the carer is nearby.</p>\r\n<p>Frequently washing hands thoroughly for 20 seconds with soap and water is critical for the carer.</p>', NULL, 1, '2020-11-04 11:46:46', '2020-11-04 11:46:46'),
(12, 'When to self-isolate and what to do?', 'when-to-self-isolate-and-what-to-do', '<h3>What is self-isolation?</h3>\r\n<p>Self-isolation is when you do not leave your home because you have or might have coronavirus (COVID-19).</p>\r\n<p>This helps stop the virus spreading to other people.</p>\r\n<p>Self-isolation is different to:</p>\r\n<ul>\r\n<li>social distancing &ndash; general advice for everyone to avoid close contact with other people</li>\r\n<li>shielding &ndash; advice for people at high risk from coronavirus</li>\r\n</ul>\r\n<h3><br />When to self-isolate</h3>\r\n<p>You must self-isolate immediately if:</p>\r\n<ul>\r\n<li>you have any symptoms of coronavirus (a high temperature, a new, continuous cough or a loss or change to your sense of smell or taste)</li>\r\n<li>you\'ve tested positive for coronavirus &ndash; this means you have coronavirus</li>\r\n<li>you live with someone who has symptoms or tested positive</li>\r\n<li>someone in your support bubble has symptoms or tested positive</li>\r\n<li>you\'re told to self-isolate by NHS Test and Trace</li>\r\n<li>you arrive in the UK from a country with a high coronavirus risk &ndash; see GOV.UK: how to self-isolate when you travel to the UK</li>\r\n</ul>\r\n<p><br />What is a support bubble?&nbsp;</p>\r\n<p><br />If you think you\'ve been in contact with someone who has coronavirus, but you do not have symptoms and have not been told to self-isolate, continue to follow social distancing advice.</p>\r\n<h3><br />How to self-isolate</h3>\r\n<p><br />You must not leave your home if you\'re self-isolating.</p>\r\n<ul>\r\n<li>do not go to work, school or public places &ndash; work from home if you can</li>\r\n<li>do not go on public transport or use taxis</li>\r\n<li>do not go out to get food and medicine &ndash; order it online or by phone, or ask someone to bring it to your home</li>\r\n<li>do not have visitors in your home, including friends and family &ndash; except for people providing essential care</li>\r\n<li>do not go out to exercise &ndash; exercise at home or in your garden, if you have one<br /><br />\r\n<h3>How long to self-isolate</h3>\r\n<br />If you have symptoms or have tested positive for coronavirus, you\'ll usually need to self-isolate for at least 10 days.</li>\r\n</ul>\r\n<p>You\'ll usually need to self-isolate for 14 days if:</p>\r\n<ul>\r\n<li>someone you live with has symptoms or tested positive</li>\r\n<li>someone in your support bubble has symptoms or tested positive</li>\r\n<li>you\'ve been told to self-isolate by NHS Test and Trace<br /><br />Read more about how long to self-isolate.<br /><br /></li>\r\n</ul>\r\n<h3>Help and support while you\'re staying at home</h3>\r\n<p><br />While you\'re self-isolating:</p>\r\n<ul>\r\n<li>you can get help with everyday tasks, like collecting shopping or medicines, from an NHS volunteer</li>\r\n<li>you might be able to get sick pay or other types of financial support if you\'re not able to work<br /><br />Find out about help and financial support while you\'re self-isolating.</li>\r\n</ul>', NULL, 1, '2020-11-04 11:52:14', '2020-11-04 12:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `test_status` int(11) NOT NULL DEFAULT '0',
  `ventilation` int(11) NOT NULL DEFAULT '0',
  `icu` int(11) NOT NULL DEFAULT '0',
  `health_condition` int(11) NOT NULL DEFAULT '1',
  `entry_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `type` int(11) DEFAULT NULL,
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `slug`, `details`, `type`, `risk_level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'COVID-19', 'covid-19', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n</div>', 1, 2, 1, '2020-08-26 23:33:54', '2020-08-30 23:53:00'),
(7, 'Plague', 'plague', '<p>Plague</p>', 1, 3, 1, '2020-09-11 00:17:50', '2020-11-04 08:33:00'),
(9, 'Ebola', 'ebola', '<p>Ebola</p>', 1, 3, 1, '2020-09-11 00:19:04', '2020-09-11 00:19:04'),
(12, 'Dengu', 'dengu', '<p>Dengu</p>', 1, 2, 1, '2020-09-11 00:21:11', '2020-11-04 08:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `disease_health_care`
--

CREATE TABLE `disease_health_care` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `health_care_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_health_care`
--

INSERT INTO `disease_health_care` (`disease_id`, `health_care_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `disease_medical_condition`
--

CREATE TABLE `disease_medical_condition` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `medical_condition_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_medical_condition`
--

INSERT INTO `disease_medical_condition` (`disease_id`, `medical_condition_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptom`
--

CREATE TABLE `disease_symptom` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `symptom_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_symptom`
--

INSERT INTO `disease_symptom` (`disease_id`, `symptom_id`) VALUES
(1, 2),
(1, 3),
(1, 1),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `health_cares`
--

CREATE TABLE `health_cares` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `type` int(11) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_cares`
--

INSERT INTO `health_cares` (`id`, `name`, `slug`, `details`, `type`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ice Therapy', 'ice-therapy', '<p>Ice Therapy</p>', 2, 3, 1, '2020-09-02 01:21:14', '2020-11-04 08:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `medical_conditions`
--

CREATE TABLE `medical_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `instructions` text,
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_conditions`
--

INSERT INTO `medical_conditions` (`id`, `name`, `slug`, `details`, `instructions`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(3, 'High Pressure', 'high-pressure', '<p>High Pressure</p>', '<p>High Pressure</p>', 3, 1, 1, '2020-09-02 00:10:33', '2020-09-02 00:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `group` tinyint(1) NOT NULL DEFAULT '0',
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `group_id`, `name`, `slug`, `details`, `group`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Paracetamol', 'paracetamol', '<p>Paracetamol</p>', 1, 1, 1, 1, '2020-09-01 01:24:12', '2020-09-01 01:24:12'),
(2, 1, 'Napa', 'napa', NULL, 0, 1, 1, 1, '2020-09-01 01:32:00', '2020-09-01 01:32:00'),
(3, 1, 'Napa Extend', 'napa-extend', NULL, 0, 1, 1, 1, '2020-11-04 09:10:03', '2020-11-04 09:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_02_161249_create_permission_tables', 1),
(5, '2020_06_06_085257_create_customers_table', 1),
(6, '2020_08_26_063024_create_diseases_table', 2),
(7, '2020_08_27_064946_create_symptoms_table', 3),
(8, '2020_08_31_060609_create_disease_symptom_table', 4),
(10, '2020_09_01_054152_create_medicines_table', 5),
(11, '2020_09_01_070400_create_symptom_medicine_table', 5),
(12, '2020_09_02_051028_create_medical_conditions_table', 6),
(13, '2020_09_02_055014_create_disease_medical_condition_table', 7),
(14, '2020_09_02_064004_create_health_cares_table', 8),
(15, '2020_09_02_071619_create_disease_health_care_table', 9),
(16, '2020_09_03_060952_create_blogs_table', 10),
(18, '2020_09_06_060846_create_patients_table', 11),
(19, '2020_11_01_135914_create_tests_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1),
(1, 'App\\User', 2),
(3, 'App\\User', 3),
(3, 'App\\User', 4),
(2, 'App\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@mail.com', '$2y$10$DAJMZ6EpgdomZsLOC/pk1OyXkgTfZ2aIxx6oSD/lB9L0174dcitKi', '2020-11-04 07:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `medical_test` int(11) NOT NULL DEFAULT '0',
  `ventilation` int(11) NOT NULL DEFAULT '0',
  `icu` int(11) NOT NULL DEFAULT '0',
  `health_condition` int(11) NOT NULL DEFAULT '1',
  `entry_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(12, 'Diseases', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(13, 'Symptoms', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(14, 'Medicines', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(15, 'MedicalConditions', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(16, 'HealthCares', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(17, 'InfoBlogs', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(18, 'OnlineTest', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(19, 'Roles', 'web', '2020-11-04 08:25:32', '2020-11-04 08:25:32'),
(20, 'Users', 'web', '2020-11-04 08:25:33', '2020-11-04 08:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-08-25 23:46:33', '2020-08-25 23:46:33'),
(2, 'Reviewer', 'web', '2020-09-13 01:19:51', '2020-09-13 01:19:51'),
(3, 'Doctor', 'web', '2020-11-04 07:22:56', '2020-11-04 07:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(17, 2),
(18, 2),
(13, 3),
(14, 3),
(15, 3),
(16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `priority` int(11) NOT NULL DEFAULT '0',
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `name`, `slug`, `details`, `priority`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fevar', 'fevar', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n</div>', 3, 1, 1, 1, '2020-08-27 01:20:30', '2020-08-30 23:57:46'),
(2, 'Body Pain', 'body-pain', NULL, 3, 2, 1, 1, '2020-08-31 00:40:24', '2020-08-31 00:40:24'),
(3, 'Cough', 'cough', NULL, 3, 2, 1, 1, '2020-08-31 00:42:33', '2020-08-31 00:42:33'),
(4, 'Loss of Taste & Smell', 'loss-of-taste-smell', NULL, 3, 1, 0, 1, '2020-11-04 10:05:29', '2020-11-04 10:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `symptom_medicine`
--

CREATE TABLE `symptom_medicine` (
  `symptom_id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptom_medicine`
--

INSERT INTO `symptom_medicine` (`symptom_id`, `medicine_id`) VALUES
(2, 1),
(1, 1),
(2, 2),
(1, 2),
(2, 3),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `department` varchar(191) DEFAULT NULL,
  `organization` varchar(191) DEFAULT NULL,
  `higher_degree` varchar(191) DEFAULT NULL,
  `academy` varchar(191) DEFAULT NULL,
  `specialty` text,
  `profile` text,
  `photo` text,
  `phone` varchar(191) DEFAULT NULL,
  `address` text,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `dob`, `designation`, `department`, `organization`, `higher_degree`, `academy`, `specialty`, `profile`, `photo`, `phone`, `address`, `city`, `country`, `remember_token`, `is_admin`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', 'admin@mail.com', NULL, '$2y$10$4qpPjESW.dsoCzsr4BTDxeqE0IrZoAAqy4mqCf8PAKxepDCe7FfcS', 1, '1994-11-18', 'Developer', 'IT', 'COVID-19 Research Center', 'BSC in Engineering', 'CUB', 'Programming', 'Will say something...', '87775476_2503550363230869_6900561810877841408_n_1604500092.jpg', '01740473189', 'Mirpur', 'Dhaka', 'Bangladesh', 'zmqaVgQktTse2bmxDbkLHpXyc4DpgZy8ETQyqugwyAMdwaPyyymDeqE4EG54', 1, 1, '2020-11-04 08:22:01', '2020-11-04 08:28:12'),
(4, 'Habib R.', 'softtechhabib@gmail.com', NULL, '$2y$10$4SwgWs7QHKM0iIbRhw7B3Oj3zC.8HcdnJcPIEZczdqvjWbaIR2n9a', 1, '2020-11-05', 'ABC', 'XYZ', 'City Uni', 'MBBS', 'DMC', 'Heart', 'Nothing to say', NULL, '01740473189', 'Chilmari', 'Kurigram', NULL, 'Oxayok3S5e9QSKCycE1kl2WyizgoqS3hZzvFRkM6vKkKajj6XP4QDLScUOap', 0, 1, '2020-11-04 13:04:29', '2020-11-04 13:04:29'),
(5, 'Harun Or Rashid', 'harunkkp@gmail.com', NULL, '$2y$10$ZajHpK954fYUvZEj9o6RJugSe6IlH9HzPQltGf5VZ1u9aV4E34HjG', 1, '2020-11-05', 'ABC', 'XYZ', 'COVID-19 Research Center', 'MBBS', 'DMC', 'Heart', NULL, NULL, '01712345678', 'Sadullahpur', 'Gaibandha', 'Bangladesh', '2dD48Vc6gnLek0NeYB3ork7rLayycUpzkdXfLvICqqfN8o0sFk3RdzXW4mnI', 0, 1, '2020-11-04 13:17:21', '2020-11-04 13:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_name_unique` (`name`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `diseases_name_unique` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `disease_health_care`
--
ALTER TABLE `disease_health_care`
  ADD KEY `disease_health_care_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_health_care_health_care_id_foreign` (`health_care_id`);

--
-- Indexes for table `disease_medical_condition`
--
ALTER TABLE `disease_medical_condition`
  ADD KEY `disease_medical_condition_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_medical_condition_medical_condition_id_foreign` (`medical_condition_id`);

--
-- Indexes for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD KEY `disease_symptom_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_symptom_symptom_id_foreign` (`symptom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_cares`
--
ALTER TABLE `health_cares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `health_cares_name_unique` (`name`),
  ADD UNIQUE KEY `health_cares_slug_unique` (`slug`);

--
-- Indexes for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medical_conditions_name_unique` (`name`),
  ADD UNIQUE KEY `medical_conditions_slug_unique` (`slug`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicines_name_unique` (`name`),
  ADD UNIQUE KEY `medicines_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `symptoms_name_unique` (`name`),
  ADD UNIQUE KEY `symptoms_slug_unique` (`slug`);

--
-- Indexes for table `symptom_medicine`
--
ALTER TABLE `symptom_medicine`
  ADD KEY `symptom_medicine_symptom_id_foreign` (`symptom_id`),
  ADD KEY `symptom_medicine_medicine_id_foreign` (`medicine_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health_cares`
--
ALTER TABLE `health_cares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_health_care`
--
ALTER TABLE `disease_health_care`
  ADD CONSTRAINT `disease_health_care_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_health_care_health_care_id_foreign` FOREIGN KEY (`health_care_id`) REFERENCES `health_cares` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `disease_medical_condition`
--
ALTER TABLE `disease_medical_condition`
  ADD CONSTRAINT `disease_medical_condition_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_medical_condition_medical_condition_id_foreign` FOREIGN KEY (`medical_condition_id`) REFERENCES `medical_conditions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD CONSTRAINT `disease_symptom_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_symptom_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `symptom_medicine`
--
ALTER TABLE `symptom_medicine`
  ADD CONSTRAINT `symptom_medicine_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `symptom_medicine_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
