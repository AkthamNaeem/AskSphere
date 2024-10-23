<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Like;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'category' => 1,
                'contents' => [
                    'What are the key benefits of cloud computing for businesses today?',
                    'How do cybersecurity threats evolve with advancements in technology?',
                    'What are the implications of 5G technology on mobile applications and IoT?',
                    'How can businesses implement effective data management strategies?',
                    'What role does artificial intelligence play in customer service?',
                    'How can organizations ensure their IT infrastructure is scalable?',
                    'What are the ethical considerations in using big data for business decisions?',
                    'How does blockchain technology transform industries beyond finance?',
                    'What are the challenges of digital transformation for legacy businesses?',
                    'How can machine learning algorithms be used to enhance product recommendations?'
                ],
                'answers' => [
                    'Cloud computing offers businesses flexibility, scalability, cost savings, and enhanced collaboration.',
                    'Cybersecurity threats evolve as attackers use advanced techniques like AI-powered attacks and deepfakes.',
                    '5G accelerates mobile applications and IoT by offering faster speeds, lower latency, and improved reliability.',
                    'Businesses can implement data management strategies by investing in data governance, analytics, and secure storage.',
                    'Artificial intelligence enhances customer service through automation, personalization, and faster response times.',
                    'Scalability in IT infrastructure can be achieved through cloud solutions, modular design, and automated processes.',
                    'Ethical considerations in big data include privacy concerns, data bias, and transparency in decision-making.',
                    'Blockchain transforms industries by improving transparency, reducing fraud, and enhancing supply chain management.',
                    'Digital transformation challenges legacy businesses through outdated systems, resistance to change, and lack of agility.',
                    'Machine learning enhances product recommendations by analyzing customer behavior and preferences to suggest relevant items.',
                ],
            ],
            [
                'category' => 2,
                'contents' => [
                    'What are the main factors influencing stock market fluctuations?',
                    'How can businesses optimize their budgeting processes for better financial management?',
                    'What are the risks and benefits of investing in cryptocurrencies?',
                    'How do interest rates affect consumer spending and investment?',
                    'What is the significance of cash flow management for small businesses?',
                    'How can financial forecasting help in strategic planning?',
                    'What role does corporate governance play in financial decision-making?',
                    'How can businesses effectively manage their debts to ensure sustainability?',
                    'What are the implications of tax regulations on corporate profitability?',
                    'How can financial technology (FinTech) transform traditional banking services?'
                ],
                'answers' => [
                    'Stock market fluctuations are influenced by economic indicators, geopolitical events, and investor sentiment.',
                    'Optimizing budgeting involves streamlining processes, using forecasting tools, and aligning budgets with strategic goals.',
                    'Cryptocurrencies offer high potential returns but come with risks like volatility, regulatory uncertainty, and fraud.',
                    'Interest rates influence consumer spending by affecting loan affordability and saving incentives, which impacts investments.',
                    'Cash flow management is critical for small businesses as it ensures liquidity to cover expenses and avoid financial distress.',
                    'Financial forecasting aids in strategic planning by predicting future revenues, costs, and helping to allocate resources efficiently.',
                    'Corporate governance guides financial decisions by enforcing accountability, transparency, and alignment with shareholder interests.',
                    'Effective debt management involves maintaining a balanced debt-to-equity ratio, timely repayments, and refinancing options.',
                    'Tax regulations affect corporate profitability by determining tax liabilities and influencing investment and expansion decisions.',
                    'FinTech transforms banking services by offering digital payments, mobile banking, and automated financial advising.',
                ],
            ],
            [
                'category' => 3,
                'contents' => [
                    'What strategies can businesses use to enhance customer engagement through marketing?',
                    'How can data analytics improve sales forecasting and inventory management?',
                    'What are the benefits of multi-channel marketing approaches?',
                    'How do consumer behavior trends impact sales strategies?',
                    'What role does social media play in modern marketing?',
                    'How can companies create effective brand awareness campaigns?',
                    'What are the challenges of measuring marketing ROI?',
                    'How can storytelling be used to enhance marketing efforts?',
                    'What strategies can be employed to retain customers in a competitive market?',
                    'How can influencer marketing affect brand perception and sales?'
                ],
                'answers' => [
                    'Customer engagement can be enhanced through personalized experiences, loyalty programs, and targeted campaigns.',
                    'Data analytics improves sales forecasting by predicting demand trends and optimizing inventory to meet customer needs.',
                    'Multi-channel marketing allows businesses to reach customers through various touchpoints, increasing brand visibility and engagement.',
                    'Consumer behavior trends like preference for online shopping and sustainability affect how businesses develop sales strategies.',
                    'Social media provides direct interaction with customers, enabling real-time feedback and targeted advertising.',
                    'Effective brand awareness campaigns use consistent messaging, strong visuals, and emotional connections to resonate with the audience.',
                    'Measuring marketing ROI can be challenging due to the difficulty in attributing direct sales to marketing efforts across channels.',
                    'Storytelling enhances marketing by creating emotional connections, making brands memorable, and humanizing products.',
                    'Retaining customers requires excellent customer service, personalized marketing, and loyalty incentives to foster long-term relationships.',
                    'Influencer marketing affects brand perception by leveraging trusted figures to promote products, often boosting credibility and reach.',
                ],
            ],
            [
                'category' => 4,
                'contents' => [
                    'What are the key components of effective healthcare management?',
                    'How can technology improve patient care and outcomes?',
                    'What challenges do healthcare organizations face in data management?',
                    'How do healthcare policies impact service delivery?',
                    'What are the ethical considerations in healthcare marketing?',
                    'How can telemedicine change the landscape of patient care?',
                    'What role does preventive care play in healthcare systems?',
                    'How can patient feedback improve healthcare services?',
                    'What are the implications of health data breaches on patient trust?',
                    'How can interprofessional collaboration enhance healthcare delivery?'
                ],
                'answers' => [
                    'Effective healthcare management includes resource allocation, patient care, regulatory compliance, and staff training.',
                    'Technology improves patient care through electronic health records, telemedicine, and patient monitoring systems.',
                    'Healthcare organizations face challenges in data management such as maintaining data security, interoperability, and scalability.',
                    'Healthcare policies affect service delivery by setting standards for care quality, accessibility, and affordability.',
                    'Ethical considerations in healthcare marketing involve patient confidentiality, accuracy of information, and non-exploitation of vulnerable groups.',
                    'Telemedicine changes patient care by offering remote consultations, improving access, and reducing healthcare costs.',
                    'Preventive care reduces long-term healthcare costs by focusing on early detection and lifestyle changes to prevent diseases.',
                    'Patient feedback is crucial for identifying areas of improvement, ensuring patient satisfaction, and enhancing service quality.',
                    'Health data breaches erode patient trust, harm reputations, and may lead to legal consequences for healthcare providers.',
                    'Interprofessional collaboration improves healthcare delivery by fostering teamwork and improving patient outcomes across disciplines.',
                ],
            ],
            [
                'category' => 5,
                'contents' => [
                    'What are the main challenges facing the manufacturing industry today?',
                    'How can lean manufacturing principles improve efficiency?',
                    'What role does automation play in modern manufacturing processes?',
                    'How can manufacturers ensure product quality and safety?',
                    'What are the implications of globalization on manufacturing operations?',
                    'How can sustainability practices be integrated into manufacturing?',
                    'What are the key factors for successful supply chain management?',
                    'How can data analytics optimize manufacturing processes?',
                    'What are the trends shaping the future of the manufacturing industry?',
                    'How can employee training impact manufacturing performance?'
                ],
                'answers' => [
                    'The manufacturing industry faces challenges like supply chain disruptions, labor shortages, and rising costs.',
                    'Lean manufacturing improves efficiency by minimizing waste, optimizing workflows, and enhancing productivity.',
                    'Automation improves manufacturing processes by reducing manual labor, increasing precision, and speeding up production times.',
                    'Manufacturers ensure product quality by implementing stringent testing, quality control processes, and regulatory compliance.',
                    'Globalization impacts manufacturing through outsourcing, market expansion, and competition with international firms.',
                    'Sustainability practices like energy efficiency and recycling can be integrated into manufacturing to reduce environmental impacts.',
                    'Successful supply chain management relies on transparent communication, technology integration, and risk mitigation strategies.',
                    'Data analytics optimizes manufacturing by identifying inefficiencies, predicting maintenance needs, and improving production schedules.',
                    'Trends shaping the future of manufacturing include automation, artificial intelligence, and sustainability initiatives.',
                    'Employee training improves performance by increasing skill levels, reducing errors, and fostering a culture of continuous improvement.',
                ],
            ],
            [
                'category' => 6,
                'contents' => [
                    'How can sustainable farming practices improve food security?',
                    'What are the benefits of organic farming compared to conventional farming?',
                    'How can technology enhance agricultural productivity?',
                    'What are the impacts of climate change on agriculture?',
                    'How can farmers effectively manage water resources?',
                    'What role do government policies play in supporting agriculture?',
                    'How can crop rotation improve soil health?',
                    'What are the challenges of marketing local produce?',
                    'How can farmers adapt to changing consumer preferences?',
                    'What are the benefits of agroforestry systems in sustainable agriculture?'
                ],
            ],
            [
                'category' => 7,
                'contents' => [
                    'What are the current trends in educational technology?',
                    'How can personalized learning enhance student engagement?',
                    'What role do standardized tests play in education assessment?',
                    'How can educators effectively integrate social-emotional learning?',
                    'What are the benefits of project-based learning in schools?',
                    'How can technology support inclusive education practices?',
                    'What challenges do teachers face in implementing new curricula?',
                    'How can parental involvement impact student success?',
                    'What are the implications of remote learning on education equity?',
                    'How can educational institutions promote lifelong learning?'
                ],
            ],
            [
                'category' => 8,
                'contents' => [
                    'What are the key considerations in providing legal services to clients?',
                    'How can technology streamline legal research and documentation?',
                    'What are the challenges of maintaining client confidentiality?',
                    'How can legal professionals effectively manage their time?',
                    'What role does alternative dispute resolution play in the legal field?',
                    'How can lawyers ensure compliance with ethical standards?',
                    'What are the implications of legal precedents on future cases?',
                    'How can law firms effectively market their services?',
                    'What are the challenges of access to justice in legal systems?',
                    'How can legal professionals stay updated on changing laws and regulations?'
                ],
            ],
            [
                'category' => 9,
                'contents' => [
                    'How does the entertainment industry impact cultural trends?',
                    'What are the challenges of content creation in digital media?',
                    'How can social media influence public perception of media outlets?',
                    'What role does copyright law play in the entertainment sector?',
                    'How can streaming services transform traditional media consumption?',
                    'What are the ethical considerations in reality television?',
                    'How can diversity and inclusion be promoted in media productions?',
                    'What are the implications of media representation on society?',
                    'How can audience engagement be measured in the entertainment industry?',
                    'What trends are shaping the future of entertainment consumption?'
                ],
            ],
            [
                'category' => 10,
                'contents' => [
                    'What are the key trends in the tourism and hospitality industry?',
                    'How can customer experience be enhanced in hotels and restaurants?',
                    'What role does technology play in modern tourism services?',
                    'How can sustainability practices be integrated into tourism?',
                    'What are the challenges of managing a diverse workforce in hospitality?',
                    'How can tourism marketing effectively target millennials?',
                    'What are the impacts of social media on travel planning?',
                    'How can destination branding influence tourism growth?',
                    'What are the implications of travel restrictions on the hospitality industry?',
                    'How can local communities benefit from tourism development?'
                ],
            ],
            [
                'category' => 11,
                'contents' => [
                    'What are the key elements of a successful marketing strategy?',
                    'How can market research inform product development?',
                    'What role does branding play in consumer perception?',
                    'How can digital marketing enhance customer engagement?',
                    'What are the challenges of measuring marketing effectiveness?',
                    'How can companies leverage social media for brand promotion?',
                    'What are the implications of consumer behavior on marketing strategies?',
                    'How can businesses adapt to changing market trends?',
                    'What role does content marketing play in attracting customers?',
                    'How can customer feedback improve marketing strategies?'
                ],
            ],
            [
                'category' => 12,
                'contents' => [
                    'What are the critical factors for successful project management in construction?',
                    'How can safety regulations be effectively implemented on construction sites?',
                    'What role does technology play in modern construction practices?',
                    'How can sustainable building materials impact environmental outcomes?',
                    'What are the challenges of managing a remote construction workforce?',
                    'How can effective communication improve collaboration among project teams?',
                    'What are the trends shaping the future of construction engineering?',
                    'How can project managers ensure compliance with local regulations?',
                    'What role does risk management play in construction projects?',
                    'How can innovations in design improve construction efficiency?'
                ],
            ],
            [
                'category' => 13,
                'contents' => [
                    'How can logistics optimization improve supply chain efficiency?',
                    'What are the challenges of managing transportation logistics in global trade?',
                    'How can technology enhance warehouse management processes?',
                    'What role does customer service play in logistics operations?',
                    'How can sustainability be integrated into logistics strategies?',
                    'What are the impacts of e-commerce on logistics and distribution?',
                    'How can data analytics improve decision-making in logistics?',
                    'What are the key trends shaping the logistics industry today?',
                    'How can risk management strategies mitigate disruptions in logistics?',
                    'What role does inventory management play in successful logistics operations?'
                ],
            ],
            [
                'category' => 14,
                'contents' => [
                    'What are the main sources of energy used in modern society?',
                    'How can renewable energy sources reduce reliance on fossil fuels?',
                    'What role does energy efficiency play in sustainability efforts?',
                    'How can government policies promote clean energy adoption?',
                    'What are the challenges of transitioning to a renewable energy economy?',
                    'How can technology improve energy storage solutions?',
                    'What are the implications of climate change on energy production?',
                    'How can individuals contribute to energy conservation at home?',
                    'What are the trends in the global energy market?',
                    'How can international cooperation enhance energy security?'
                ],
            ],
            [
                'category' => 15,
                'contents' => [
                    'How can public services effectively address community needs?',
                    'What are the challenges of delivering healthcare through public services?',
                    'How can technology improve the efficiency of government services?',
                    'What role does public feedback play in service improvement?',
                    'How can transparency enhance trust in public services?',
                    'What are the implications of budget cuts on service delivery?',
                    'How can collaboration between government and NGOs improve outcomes?',
                    'What strategies can be employed to engage citizens in public service delivery?',
                    'How can public service programs be evaluated for effectiveness?',
                    'What are the trends shaping the future of public administration?'
                ],
            ],
            [
                'category' => 16,
                'contents' => [
                    'What are the key factors to consider when launching an e-commerce business?',
                    'How can customer data analytics improve online shopping experiences?',
                    'What strategies can be implemented to reduce shopping cart abandonment rates?',
                    'How do payment gateway options impact consumer trust in e-commerce?',
                    'What role does SEO play in the success of an e-commerce website?',
                    'How can social media marketing enhance e-commerce sales?',
                    'What are the challenges of managing inventory for an online store?',
                    'How can personalized marketing improve customer retention in e-commerce?',
                    'What are the best practices for ensuring cybersecurity in online transactions?',
                    'How can businesses leverage user-generated content to boost e-commerce engagement?'

                ],
            ],
            [
                'category' => 17,
                'contents' => [
                    'What are the physical and mental benefits of regular exercise?',
                    'How can technology enhance training and performance in sports?',
                    'What role does nutrition play in athletic performance?',
                    'How can fitness programs be tailored to accommodate various age groups?',
                    'What are the psychological impacts of team sports on youth development?',
                    'How can community engagement promote fitness and well-being?',
                    'What are the challenges of promoting womens participation in sports?',
                    'How do injury prevention strategies differ among various sports?',
                    'What are the effects of sports on social cohesion in communities?',
                    'How can mental health awareness be integrated into sports training?'
                ],
            ],
            [
                'category' => 18,
                'contents' => [
                    'How can personal branding enhance career opportunities for individuals?',
                    'What role does effective communication play in personal service industries?',
                    'How can feedback mechanisms improve personal service quality?',
                    'What are the best practices for providing exceptional customer service?',
                    'How can personal service providers adapt to changing consumer preferences?',
                    'What strategies can be employed to build long-lasting client relationships?',
                    'How can technology improve service delivery in personal services?',
                    'What are the challenges of managing client expectations in personal services?',
                    'How can personal service providers ensure inclusivity and accessibility?',
                    'What are the key considerations for personal safety in service-oriented jobs?'
                ],
            ],
            [
                'category' => 19,
                'contents' => [
                    'How can collaboration between academia and industry enhance research outcomes?',
                    'What are the ethical considerations in conducting research involving human subjects?',
                    'How can funding limitations impact the scope of research projects?',
                    'What role does innovation play in driving economic growth through research?',
                    'How can research findings be effectively communicated to the public?',
                    'What are the challenges of replicating research studies in scientific fields?',
                    'How can interdisciplinary research address complex global issues?',
                    'What strategies can be implemented to improve research transparency and reproducibility?',
                    'How can technology facilitate data collection and analysis in research?',
                    'What are the impacts of research and development on societal change?'
                ],
            ],
            [
                'category' => 20,
                'contents' => [
                    'What are the key traits of successful entrepreneurs in today’s market?',
                    'How can startups leverage technology to gain a competitive edge?',
                    'What role does innovation play in driving business growth and sustainability?',
                    'How can entrepreneurs effectively pivot their business models in response to market changes?',
                    'What strategies can be used to secure funding for innovative startups?',
                    'How can collaboration between entrepreneurs and established companies foster innovation?',
                    'What are the common pitfalls entrepreneurs face in the early stages of their business?',
                    'How can a strong company culture contribute to innovation and employee satisfaction?',
                    'What are the ethical considerations entrepreneurs must navigate in their ventures?',
                    'How can entrepreneurship education empower the next generation of innovators?'
                ],
            ],
        ];


        foreach ($questions as $question) {
            foreach ($question['contents'] as $content) {
                $date = fake()->date;
                Question::query()->create([
                    'user_id' => rand(1,25),
                    'category_id' => $question['category'],
                    'content' => $content,
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }
        }
        for($i=1; $i<200; $i++) {
            $date = fake()->date;
            Question::query()->create([
                'user_id' => rand(1,25),
                'category_id' => rand(1,10),
                'content' => fake()->realText,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }


    }
}
