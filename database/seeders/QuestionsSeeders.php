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
                'answers' => [
                    'Sustainable farming practices, such as crop rotation and permaculture, enhance biodiversity and soil health, leading to increased food production and resilience against climate fluctuations, thereby improving food security.',
                    'Organic farming reduces chemical inputs, which can lead to healthier ecosystems, improved soil health, and potentially higher prices for farmers, while also addressing consumer demand for sustainably produced food.',
                    'Technology, such as precision agriculture, drones, and data analytics, can optimize resource use, improve crop monitoring, and increase yields, ultimately enhancing agricultural productivity and sustainability.',
                    'Climate change leads to altered weather patterns, affecting crop yields and increasing pest and disease prevalence, which can threaten food production and security in many regions.',
                    'Farmers can manage water resources effectively through techniques like drip irrigation, rainwater harvesting, and crop selection based on water availability, ensuring sustainable use and conservation of water.',
                    'Government policies play a critical role by providing subsidies, research funding, and infrastructure development, which can enhance agricultural productivity and support farmers in adopting sustainable practices.',
                    'Crop rotation improves soil health by preventing nutrient depletion, reducing soil erosion, and disrupting pest cycles, leading to better yields and reduced need for chemical fertilizers.',
                    'Challenges in marketing local produce include competition from large-scale producers, lack of distribution networks, and limited consumer awareness, which can hinder local farmers from reaching wider markets.',
                    'Farmers can adapt to changing consumer preferences by diversifying their crop selections, engaging in direct marketing, and using social media to connect with consumers, ensuring their products meet market demands.',
                    'Agroforestry systems, which integrate trees with crops and livestock, enhance biodiversity, improve soil health, and provide additional income sources, contributing to the sustainability and resilience of agricultural systems.'
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
                'answers' => [
                    'Sustainable farming practices, such as crop rotation and permaculture, enhance biodiversity and soil health, leading to increased food production and resilience against climate fluctuations, thereby improving food security.',
                    'Organic farming reduces chemical inputs, which can lead to healthier ecosystems, improved soil health, and potentially higher prices for farmers, while also addressing consumer demand for sustainably produced food.',
                    'Technology, such as precision agriculture, drones, and data analytics, can optimize resource use, improve crop monitoring, and increase yields, ultimately enhancing agricultural productivity and sustainability.',
                    'Climate change leads to altered weather patterns, affecting crop yields and increasing pest and disease prevalence, which can threaten food production and security in many regions.',
                    'Farmers can manage water resources effectively through techniques like drip irrigation, rainwater harvesting, and crop selection based on water availability, ensuring sustainable use and conservation of water.',
                    'Government policies play a critical role by providing subsidies, research funding, and infrastructure development, which can enhance agricultural productivity and support farmers in adopting sustainable practices.',
                    'Crop rotation improves soil health by preventing nutrient depletion, reducing soil erosion, and disrupting pest cycles, leading to better yields and reduced need for chemical fertilizers.',
                    'Challenges in marketing local produce include competition from large-scale producers, lack of distribution networks, and limited consumer awareness, which can hinder local farmers from reaching wider markets.',
                    'Farmers can adapt to changing consumer preferences by diversifying their crop selections, engaging in direct marketing, and using social media to connect with consumers, ensuring their products meet market demands.',
                    'Agroforestry systems, which integrate trees with crops and livestock, enhance biodiversity, improve soil health, and provide additional income sources, contributing to the sustainability and resilience of agricultural systems.'
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
                'answers' => [
                    'Key considerations in providing legal services include understanding client needs, effective communication, maintaining confidentiality, providing clear and accurate advice, and ensuring compliance with relevant laws and regulations.',
                    'Technology can streamline legal research and documentation through the use of legal databases, AI-powered tools for case law analysis, and document automation software, which enhance efficiency and accuracy in legal work.',
                    'Challenges in maintaining client confidentiality include safeguarding sensitive information from breaches, ensuring secure communication channels, and navigating situations where disclosure may be legally required.',
                    'Legal professionals can effectively manage their time by prioritizing tasks, using legal project management tools, setting deadlines, delegating responsibilities, and employing time-tracking software to improve productivity.',
                    'Alternative dispute resolution (ADR) plays a crucial role by offering cost-effective and efficient methods for resolving disputes outside of traditional court settings, including mediation and arbitration, which can lead to faster resolutions.',
                    'Lawyers can ensure compliance with ethical standards by adhering to the professional code of conduct, engaging in continuous legal education, seeking mentorship, and implementing internal compliance procedures within their firms.',
                    'Legal precedents impact future cases by establishing binding or persuasive authority, guiding judges and lawyers in interpreting laws, and influencing the outcome of similar cases based on established legal principles.',
                    'Law firms can effectively market their services by leveraging digital marketing strategies, networking within the community, providing valuable content through blogs or webinars, and utilizing social media to reach potential clients.',
                    'Challenges of access to justice include high legal costs, limited availability of legal aid, geographic barriers, and systemic issues that prevent marginalized communities from receiving fair legal representation.',
                    'Legal professionals can stay updated on changing laws and regulations by subscribing to legal journals, attending conferences and workshops, joining professional associations, and utilizing legal research platforms that provide timely updates.'
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
                'answers' => [
                    'The entertainment industry impacts cultural trends by shaping societal values, influencing fashion, language, and behaviors, and reflecting or challenging social norms through various media forms, including film, television, and music.',
                    'Challenges of content creation in digital media include the need for originality, maintaining audience attention in a saturated market, ensuring quality production, navigating copyright issues, and adapting to rapidly changing technology and platforms.',
                    'Social media influences public perception of media outlets by enabling real-time feedback, allowing users to share experiences, and creating viral trends, which can enhance or damage a media outlet’s reputation based on audience sentiment.',
                    'Copyright law plays a crucial role in the entertainment sector by protecting the intellectual property rights of creators, ensuring they receive compensation for their work, and providing legal frameworks for the distribution and use of creative content.',
                    'Streaming services transform traditional media consumption by offering on-demand access to content, personalized recommendations, and subscription models, leading to changes in viewing habits and a decline in traditional broadcast television.',
                    'Ethical considerations in reality television include issues of consent, manipulation of participants, portrayal of sensitive topics, and the potential for harm to individuals’ reputations, necessitating responsible production practices.',
                    'Diversity and inclusion can be promoted in media productions through equitable hiring practices, representation of varied backgrounds and perspectives in storytelling, and creating spaces for underrepresented voices within the industry.',
                    'Media representation has significant implications on society by influencing public perceptions of different groups, shaping stereotypes, and affecting the self-image of marginalized communities, highlighting the need for responsible storytelling.',
                    'Audience engagement in the entertainment industry can be measured through various metrics, including viewership ratings, social media interactions, audience surveys, and analytics from streaming platforms that track user behavior and preferences.',
                    'Trends shaping the future of entertainment consumption include the rise of streaming platforms, increased demand for interactive and immersive experiences (like virtual reality), the influence of social media content creators, and a growing focus on sustainability in production practices.'
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
                'answers' => [
                    'Key trends in the tourism and hospitality industry include the rise of experiential travel, increased focus on sustainability, the growth of wellness tourism, and the impact of technology on service delivery and customer engagement.',
                    'Customer experience in hotels and restaurants can be enhanced by personalizing services, training staff for better customer interactions, utilizing technology for seamless check-ins and orders, and creating unique, memorable experiences that exceed expectations.',
                    'Technology plays a significant role in modern tourism services by enabling online bookings, facilitating communication through apps, utilizing data analytics for personalized marketing, and enhancing guest experiences through smart hotel technologies.',
                    'Sustainability practices can be integrated into tourism by promoting eco-friendly accommodations, encouraging responsible tourism behaviors, implementing waste reduction initiatives, and supporting local conservation efforts to minimize environmental impacts.',
                    'Challenges of managing a diverse workforce in hospitality include cultural differences, communication barriers, and varying expectations regarding work ethics, which require inclusive leadership and effective training programs to foster teamwork and understanding.',
                    'Tourism marketing can effectively target millennials by leveraging social media platforms, creating authentic and engaging content, offering unique experiences that resonate with their values, and utilizing influencers to reach this demographic.',
                    'Social media significantly impacts travel planning by providing platforms for sharing experiences, influencing destination choices through user-generated content, and enabling travelers to research and compare options through reviews and recommendations.',
                    'Destination branding influences tourism growth by creating a strong identity for a location, differentiating it from competitors, and attracting visitors through effective storytelling and marketing strategies that highlight unique attributes and experiences.',
                    'Travel restrictions have significant implications on the hospitality industry, leading to reduced occupancy rates, financial losses for businesses, workforce reductions, and shifts in consumer behavior as travelers seek safer and more flexible options.',
                    'Local communities can benefit from tourism development through job creation, increased income from tourism-related businesses, the promotion of local culture and products, and funding for community projects and infrastructure improvements.'
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
                'answers' => [
                    'Key elements of a successful marketing strategy include clear objectives, understanding the target audience, effective messaging, a well-defined value proposition, and the selection of appropriate channels for reaching customers.',
                    'Market research informs product development by providing insights into consumer needs, preferences, and behaviors, allowing companies to identify gaps in the market, validate ideas, and tailor products to meet specific demands.',
                    'Branding plays a crucial role in consumer perception by establishing an identity for the product or company, creating emotional connections, and differentiating offerings from competitors, which influences purchasing decisions and loyalty.',
                    'Digital marketing enhances customer engagement through personalized communication, interactive content, targeted advertising, and the use of social media platforms to facilitate direct interaction and build community around the brand.',
                    'Challenges of measuring marketing effectiveness include defining clear metrics, accounting for external factors that influence results, tracking data accurately across channels, and distinguishing the impact of marketing efforts from other business activities.',
                    'Companies can leverage social media for brand promotion by creating engaging content, utilizing influencers, running targeted ad campaigns, engaging with followers through comments and messages, and using analytics to refine their strategies.',
                    'Consumer behavior has significant implications on marketing strategies by dictating how products are positioned, priced, and promoted, necessitating businesses to stay attuned to trends, preferences, and feedback to remain competitive.',
                    'Businesses can adapt to changing market trends by conducting regular market analysis, being agile in their operations, experimenting with new approaches, and embracing innovation to meet evolving consumer demands.',
                    'Content marketing plays a vital role in attracting customers by providing valuable information, building trust and authority, enhancing search engine visibility, and nurturing leads through engaging storytelling and relevant content.',
                    'Customer feedback improves marketing strategies by providing insights into customer satisfaction, preferences, and pain points, allowing businesses to refine their offerings, enhance messaging, and address issues effectively to meet consumer needs.'
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
                'answers' => [
                    'Critical factors for successful project management in construction include clear project objectives, effective planning and scheduling, strong leadership, stakeholder engagement, risk management, and adherence to budgets and timelines.',
                    'Safety regulations can be effectively implemented on construction sites through comprehensive training programs, regular safety audits, clear communication of safety protocols, the use of personal protective equipment (PPE), and fostering a culture of safety among workers.',
                    'Technology plays a significant role in modern construction practices by enhancing project planning and management through Building Information Modeling (BIM), improving collaboration via cloud-based tools, and increasing efficiency through automation and advanced machinery.',
                    'Sustainable building materials can significantly impact environmental outcomes by reducing resource consumption, minimizing waste, lowering carbon footprints, and enhancing energy efficiency, thereby contributing to more environmentally friendly construction practices.',
                    'Challenges of managing a remote construction workforce include ensuring effective communication across different locations, maintaining productivity, monitoring progress, providing adequate training, and addressing safety concerns in a remote setting.',
                    'Effective communication improves collaboration among project teams by ensuring all members are informed of project goals, progress, and changes, facilitating quick problem-solving, and fostering a cooperative environment that enhances teamwork and productivity.',
                    'Trends shaping the future of construction engineering include the adoption of smart technologies, increased use of prefabrication and modular construction, a focus on sustainability, and the integration of data analytics to optimize project outcomes.',
                    'Project managers can ensure compliance with local regulations by staying informed about applicable laws, conducting regular inspections, engaging with regulatory bodies, and implementing robust documentation and reporting processes to track compliance efforts.',
                    'Risk management plays a crucial role in construction projects by identifying potential risks early, assessing their impact, developing mitigation strategies, and ensuring that teams are prepared to handle issues that may arise during the project lifecycle.',
                    'Innovations in design, such as modular construction, 3D printing, and the use of advanced materials, can improve construction efficiency by reducing construction time, minimizing waste, enhancing precision, and allowing for more complex architectural features.'
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
                'answers' => [
                    'Logistics optimization improves supply chain efficiency by streamlining processes, reducing transportation costs, minimizing delays, enhancing inventory management, and improving overall visibility, which leads to better resource allocation and customer satisfaction.',
                    'Challenges of managing transportation logistics in global trade include regulatory compliance, fluctuating fuel prices, customs clearance complexities, varying infrastructure quality in different regions, and the need for effective communication across diverse stakeholders.',
                    'Technology enhances warehouse management processes through automation, real-time tracking systems, RFID technology, and warehouse management software that improves inventory accuracy, reduces human error, and increases overall operational efficiency.',
                    'Customer service plays a vital role in logistics operations by ensuring timely communication regarding order status, addressing customer inquiries and issues, enhancing satisfaction through reliable deliveries, and fostering long-term relationships that can lead to repeat business.',
                    'Sustainability can be integrated into logistics strategies by optimizing transportation routes to reduce emissions, using eco-friendly packaging materials, implementing energy-efficient practices in warehouses, and collaborating with partners committed to sustainable practices.',
                    'The impacts of e-commerce on logistics and distribution include increased demand for faster delivery options, the need for more efficient last-mile delivery solutions, greater emphasis on inventory management, and the requirement for enhanced flexibility in logistics operations to meet consumer expectations.',
                    'Data analytics improve decision-making in logistics by providing insights into performance metrics, identifying trends and patterns, enabling predictive analysis for demand forecasting, and optimizing routing and inventory levels to enhance overall efficiency.',
                    'Key trends shaping the logistics industry today include the rise of automation and robotics, the growth of e-commerce, increasing focus on sustainability, the adoption of digital technologies like IoT and AI, and the need for greater supply chain visibility and transparency.',
                    'Risk management strategies mitigate disruptions in logistics by identifying potential risks, implementing contingency plans, maintaining flexible supply chains, and using technology to monitor and respond to disruptions in real-time.',
                    'Inventory management plays a crucial role in successful logistics operations by ensuring the right products are available at the right time, minimizing carrying costs, reducing stockouts and overstock situations, and enhancing overall supply chain efficiency.'
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
                'answers' => [
                    'The main sources of energy used in modern society include fossil fuels (such as coal, oil, and natural gas), nuclear energy, and renewable energy sources (such as solar, wind, hydroelectric, and geothermal energy).',
                    'Renewable energy sources can reduce reliance on fossil fuels by providing cleaner alternatives for electricity generation, heating, and transportation, thereby decreasing greenhouse gas emissions and reducing dependence on finite fossil fuel resources.',
                    'Energy efficiency plays a crucial role in sustainability efforts by reducing energy consumption, lowering costs, minimizing waste, and decreasing environmental impacts, which helps to meet energy demands while promoting sustainable practices.',
                    'Government policies can promote clean energy adoption through incentives such as tax credits and subsidies for renewable energy projects, establishing renewable energy standards, investing in research and development, and supporting infrastructure development for clean energy technologies.',
                    'Challenges of transitioning to a renewable energy economy include the need for significant investment in new technologies, the integration of renewable sources into existing energy grids, overcoming regulatory hurdles, and addressing public resistance to change.',
                    'Technology can improve energy storage solutions through advancements in battery technology (such as lithium-ion and solid-state batteries), development of pumped hydro storage, and exploring innovative methods like compressed air energy storage and flywheel systems.',
                    'The implications of climate change on energy production include increased frequency and severity of extreme weather events, which can disrupt energy supply chains, alter hydrological cycles impacting hydroelectric power, and necessitate shifts toward more resilient and sustainable energy systems.',
                    'Individuals can contribute to energy conservation at home by using energy-efficient appliances, implementing smart home technologies, adopting renewable energy solutions (like solar panels), practicing mindful consumption, and making small lifestyle changes such as reducing heating and cooling usage.',
                    'Trends in the global energy market include the rising share of renewables in the energy mix, increasing energy demand in developing economies, advancements in energy storage technologies, and a growing emphasis on sustainability and carbon neutrality commitments by governments and corporations.',
                    'International cooperation can enhance energy security by promoting collaborative energy projects, sharing best practices for renewable energy implementation, developing cross-border energy trade agreements, and fostering research and development partnerships in clean energy technologies.'
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
                'answers' => [
                    'Public services can effectively address community needs by conducting regular assessments to identify priorities, engaging with community members to understand their challenges, tailoring services to meet specific local demands, and ensuring equitable access to resources.',
                    'Challenges of delivering healthcare through public services include limited funding, workforce shortages, bureaucratic inefficiencies, disparities in access to care, and the need to balance preventive care with acute services in resource-constrained environments.',
                    'Technology can improve the efficiency of government services through the implementation of digital platforms for service delivery, automating administrative processes, utilizing data analytics for decision-making, and enhancing communication and engagement with citizens through online channels.',
                    'Public feedback plays a crucial role in service improvement by providing insights into user experiences, identifying areas for enhancement, fostering accountability, and enabling government agencies to adapt services based on the needs and expectations of the community.',
                    'Transparency enhances trust in public services by allowing citizens to see how decisions are made, how funds are allocated, and the outcomes of service delivery, thereby fostering accountability and encouraging public engagement in governance processes.',
                    'Budget cuts can have significant implications on service delivery by leading to reduced availability of services, staff layoffs, diminished quality of care, and increased waiting times, which can ultimately affect the most vulnerable populations the hardest.',
                    'Collaboration between government and NGOs can improve outcomes by leveraging the strengths of both sectors, enhancing resource mobilization, sharing expertise, and implementing programs that address complex social issues more effectively through coordinated efforts.',
                    'Strategies to engage citizens in public service delivery include conducting outreach initiatives, utilizing social media for communication, organizing community forums, implementing participatory budgeting processes, and providing platforms for citizen feedback and involvement in decision-making.',
                    'Public service programs can be evaluated for effectiveness through performance metrics, outcome assessments, cost-benefit analyses, stakeholder surveys, and regular audits to ensure that programs are meeting their objectives and providing value to the community.',
                    'Trends shaping the future of public administration include the increasing use of technology for service delivery, a focus on citizen-centric governance, the rise of data-driven decision-making, greater emphasis on sustainability, and the need for adaptability in the face of changing societal demands.'
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
                'answers' => [
                    'Key factors to consider when launching an e-commerce business include identifying a target market, choosing the right product or service, developing a user-friendly website, ensuring secure payment options, and implementing effective marketing strategies to attract and retain customers.',
                    'Customer data analytics can improve online shopping experiences by providing insights into consumer behavior, preferences, and purchasing patterns, allowing businesses to tailor product recommendations, personalize marketing efforts, and optimize website navigation to enhance user satisfaction.',
                    'Strategies to reduce shopping cart abandonment rates include simplifying the checkout process, offering multiple payment options, sending follow-up emails to remind customers of abandoned carts, providing incentives such as discounts or free shipping, and ensuring transparency in shipping costs and delivery times.',
                    'Payment gateway options impact consumer trust in e-commerce by providing secure and convenient transaction methods; a variety of trusted payment options can enhance customer confidence, while a lack of options or insecure payment processes may deter potential buyers.',
                    'SEO plays a crucial role in the success of an e-commerce website by improving visibility in search engine results, driving organic traffic, increasing brand awareness, and attracting potential customers actively searching for products or services offered by the business.',
                    'Social media marketing enhances e-commerce sales by allowing businesses to reach and engage with a wider audience, promote products through targeted ads, build brand loyalty through community engagement, and leverage social proof through user-generated content and reviews.',
                    'Challenges of managing inventory for an online store include tracking stock levels in real-time, forecasting demand accurately, managing supplier relationships, preventing overstocking or stockouts, and ensuring efficient fulfillment processes to meet customer expectations.',
                    'Personalized marketing can improve customer retention in e-commerce by delivering tailored recommendations, targeted offers, and relevant content based on individual preferences and purchase history, fostering a sense of loyalty and encouraging repeat business.',
                    'Best practices for ensuring cybersecurity in online transactions include using secure sockets layer (SSL) encryption, implementing robust authentication methods, regularly updating software and security protocols, conducting security audits, and providing customers with information on safe online shopping practices.',
                    'Businesses can leverage user-generated content to boost e-commerce engagement by encouraging customers to share reviews, testimonials, and photos of their purchases, showcasing this content on product pages and social media, and creating a sense of community around the brand.'
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
                'answers' => [
                    'The physical benefits of regular exercise include improved cardiovascular health, increased muscle strength and flexibility, enhanced bone density, better weight management, and reduced risk of chronic diseases. Mental benefits include reduced stress, improved mood, increased self-esteem, and enhanced cognitive function.',
                    'Technology enhances training and performance in sports through the use of wearable devices (like fitness trackers), data analytics for performance monitoring, virtual reality for skill training, and mobile apps that provide tailored workout plans and nutrition advice.',
                    'Nutrition plays a crucial role in athletic performance by providing the necessary energy for training, aiding in recovery, supporting muscle repair and growth, and influencing overall health and performance, emphasizing the importance of a balanced diet rich in carbohydrates, proteins, and healthy fats.',
                    'Fitness programs can be tailored to accommodate various age groups by considering specific physical capabilities and limitations, incorporating age-appropriate activities, focusing on functional movements, and ensuring proper progression to prevent injury and promote engagement.',
                    'The psychological impacts of team sports on youth development include improved social skills, enhanced teamwork and communication, increased self-discipline, and better emotional regulation, fostering a sense of belonging and boosting overall mental well-being.',
                    'Community engagement promotes fitness and well-being by organizing local sports events, providing access to recreational facilities, encouraging active transportation (like walking or biking), and fostering social connections that motivate individuals to maintain an active lifestyle.',
                    'Challenges of promoting womens participation in sports include societal stereotypes, lack of funding and resources, limited access to facilities, and insufficient media representation, which can discourage women from pursuing athletic opportunities.',
                    'Injury prevention strategies differ among various sports by focusing on sport-specific techniques, educating athletes on proper form and safety protocols, implementing warm-up and cool-down routines, and conducting regular assessments of athletes’ physical condition.',
                    'Sports can positively affect social cohesion in communities by bringing individuals together through shared interests, fostering teamwork and collaboration, creating a sense of belonging, and providing opportunities for social interaction and community pride.',
                    'Mental health awareness can be integrated into sports training by providing education on mental health issues, promoting open discussions about mental well-being, incorporating mindfulness practices, and ensuring that coaches and athletes have access to mental health resources and support.'
                    
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
                'answers' => [
                    'Personal branding enhances career opportunities for individuals by helping them establish a unique identity, showcasing their skills and expertise, increasing visibility in their industry, and building a reputation that attracts potential employers and clients.',
                    'Effective communication plays a crucial role in personal service industries by fostering clear understanding between service providers and clients, enhancing customer satisfaction, resolving conflicts efficiently, and building trust through transparency and active listening.',
                    'Feedback mechanisms improve personal service quality by providing insights into customer experiences, identifying areas for improvement, enabling service providers to make data-driven decisions, and demonstrating a commitment to meeting client needs and expectations.',
                    'Best practices for providing exceptional customer service include actively listening to clients, responding promptly to inquiries, personalizing interactions, showing empathy, and consistently exceeding customer expectations through attention to detail and follow-up.',
                    'Personal service providers can adapt to changing consumer preferences by staying informed about industry trends, soliciting client feedback, offering flexible services, and incorporating technology to enhance convenience and personalization.',
                    'Strategies to build long-lasting client relationships include maintaining regular communication, offering personalized services, showing appreciation through thank-you notes or discounts, and being responsive to clients’ changing needs and preferences.',
                    'Technology can improve service delivery in personal services by automating routine tasks, providing online appointment scheduling, utilizing customer relationship management (CRM) systems, and enhancing communication through digital platforms such as chatbots and social media.',
                    'Challenges of managing client expectations in personal services include discrepancies between what clients anticipate and what can realistically be delivered, communication breakdowns, and the need to set clear boundaries while maintaining a positive rapport.',
                    'Personal service providers can ensure inclusivity and accessibility by offering services that cater to diverse populations, training staff on cultural competence, using accessible facilities, and being responsive to the specific needs of clients with disabilities.',
                    'Key considerations for personal safety in service-oriented jobs include being aware of surroundings, implementing safety protocols, ensuring proper training on handling difficult situations, and establishing clear emergency procedures to protect both staff and clients.'
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
                'answers' => [
                    'Collaboration between academia and industry enhances research outcomes by combining theoretical knowledge with practical applications, facilitating access to funding and resources, promoting knowledge exchange, and ensuring that research addresses real-world challenges faced by industries.',
                    'Ethical considerations in conducting research involving human subjects include obtaining informed consent, ensuring participant confidentiality, minimizing potential harm, providing the right to withdraw from the study, and ensuring that the research complies with ethical guidelines and regulations.',
                    'Funding limitations can impact the scope of research projects by restricting the number of experiments that can be conducted, limiting the resources available for data collection and analysis, and potentially forcing researchers to scale back their ambitions or seek alternative, less costly methodologies.',
                    'Innovation plays a crucial role in driving economic growth through research by leading to the development of new technologies, products, and services that can enhance productivity, create jobs, and improve overall quality of life while fostering a competitive economy.',
                    'Research findings can be effectively communicated to the public through various channels such as press releases, public lectures, social media, infographics, and collaborations with science communicators, ensuring that complex information is presented in an accessible and engaging manner.',
                    'Challenges of replicating research studies in scientific fields include variations in experimental conditions, differences in sample populations, issues with data transparency, and the potential for publication bias, which can lead to difficulties in validating previous findings.',
                    'Interdisciplinary research can address complex global issues by integrating knowledge and methods from different academic fields, fostering collaboration among diverse experts, and generating holistic solutions that consider the multifaceted nature of problems like climate change, health care, and social justice.',
                    'Strategies to improve research transparency and reproducibility include preregistration of studies, sharing raw data and methodologies, encouraging open-access publication, and establishing guidelines for transparent reporting of results to facilitate independent verification and analysis.',
                    'Technology facilitates data collection and analysis in research through the use of advanced tools such as data management systems, online survey platforms, statistical software, and machine learning algorithms, allowing for more efficient and accurate data handling and interpretation.',
                    'Research and development impact societal change by providing evidence-based solutions to pressing issues, influencing policy decisions, enhancing education and public awareness, and driving innovation that can lead to improved social, economic, and environmental outcomes.'
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
                'answers' => [
                    'Key traits of successful entrepreneurs in today’s market include resilience, adaptability, strong leadership skills, a willingness to take calculated risks, excellent networking abilities, and a passion for continuous learning and innovation.',
                    'Startups can leverage technology to gain a competitive edge by utilizing data analytics to understand market trends, employing digital marketing strategies to reach target audiences, automating processes for efficiency, and adopting innovative tools that enhance product development and customer engagement.',
                    'Innovation plays a crucial role in driving business growth and sustainability by enabling companies to differentiate themselves in the market, develop new products or services that meet evolving consumer needs, and create more efficient processes that reduce costs and environmental impact.',
                    'Entrepreneurs can effectively pivot their business models in response to market changes by closely monitoring industry trends, gathering feedback from customers, remaining flexible in their strategies, and being willing to experiment with new ideas or approaches when necessary.',
                    'Strategies to secure funding for innovative startups include creating a solid business plan, leveraging crowdfunding platforms, seeking angel investors or venture capitalists, applying for grants and competitions, and building relationships with potential investors through networking.',
                    'Collaboration between entrepreneurs and established companies fosters innovation by combining the agility and fresh perspectives of startups with the resources, experience, and market reach of larger firms, enabling the development of new products and services that might not be possible independently.',
                    'Common pitfalls entrepreneurs face in the early stages of their business include inadequate market research, insufficient funding, poor financial management, neglecting marketing efforts, and failing to build a strong team or support network.',
                    'A strong company culture contributes to innovation and employee satisfaction by fostering an environment of trust, open communication, and collaboration, encouraging creativity and risk-taking, and aligning employees’ values with the company’s mission, leading to higher engagement and retention.',
                    'Ethical considerations entrepreneurs must navigate include ensuring fair treatment of employees, maintaining transparency with stakeholders, addressing social and environmental impacts of their business decisions, and adhering to laws and regulations while promoting integrity and corporate social responsibility.',
                    'Entrepreneurship education empowers the next generation of innovators by equipping them with essential skills such as critical thinking, problem-solving, financial literacy, and leadership, while also instilling a mindset that values creativity, resilience, and the ability to identify and seize opportunities.'
                ],
            ],
        ];


        foreach ($questions as $question) {
            $rand = ((($question['category'] - 1) * 6) + 1);
            for ($i=0; $i<10; $i++) {
                $date = fake()->date;
                $boolean = fake()->boolean();
                $newQuestion = Question::query()->create([
                    'user_id' => rand($rand, ($rand+2)),
                    'category_id' => $question['category'],
                    'content' => $question['contents'][$i],
                    'answered' => $boolean,
                    'created_at' => $date,
                    'updated_at' => $date
                ]);
                $date = fake()->date;
                $newAnswer = Answer::query()->create([
                    'user_id' => rand(($rand+3), ($rand+5)),
                    'question_id' => $newQuestion['id'],
                    'content' => $question['answers'][$i],
                    'best' => $boolean,
                    'created_at' => $date,
                    'updated_at' => $date
                ]);
                for($j=$rand; $j<($rand+6); $j++) {
                    if(fake()->boolean()) {
                        Like::query()->create([
                            'likeable_id' => $newQuestion['id'],
                            'likeable_type' => 'question',
                            'user_id' => $j
                        ]);
                    }
                    if(fake()->boolean()) {
                        Like::query()->create([
                            'likeable_id' => $newAnswer['id'],
                            'likeable_type' => 'answer',
                            'user_id' => $j
                        ]);
                    }
                }
            }
        }
    }
}
