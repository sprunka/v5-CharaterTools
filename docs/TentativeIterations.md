### **Refined Order of Execution with Iteration in Mind**:

Instead of lumping things into sections, let's create a more **interleaved sequence** that prioritizes both output and incremental API work, allowing each piece to be immediately **visible and testable**.

### **1. Start with the Foundation for Both UI and API:**
1. **Set up Docker for easy and consistent local development** _(Done, linked to first commit)_
2. **Set up Slim PHP with initial routing and controller structure**. _(Done, linked to first commit)_
3. **Add basic HTML output for the SPC Wizard form** _(to see progress early on)_

### **2. First Iteration of SPC Wizard & Related API:**
4. **Create API endpoint for initial SPC data creation** _(Start with a bare-minimum endpoint)_(Done, linked to first commit)
5. **Build basic front-end form for SPC attributes** _(using Bootstrap for form styling, as an MVP)_
6. **Implement navigation logic for SPC multi-step form** _(get a basic user flow working)_

### **3. Early Output Implementation and Integration Testing:**
7. **Output a simple HTML character sheet** _(can be rough at first; make adjustments as we progress)_
8. **Test character sheet output with dummy SPC data** _(ensure things are wired up correctly)_

### **4. Iterate on SPC Wizard and Expand API:**
9. **Add intelligently weighted randomization option for SPC wizard steps** _(let’s add randomness early to see the user-facing impact)_
10. **Update API to handle retrieving and saving SPCs** _(support the newly-added wizard capabilities)_
11. **Adjust front-end to send/receive SPC data from API** _(integrate with updated API endpoints)_

### **5. Start Player Pregen Tool Alongside SPC Enhancements:**
12. **Design the Player Pregen Generator form layout** _(initial design stage only)_
13. **Create API endpoint for pregens** _(enough to get the basics working)_
14. **Integrate pregens with weighted randomization on the front end** _(similar to SPC randomness)_

### **6. Testing, Output Enhancements, and Refinements:**
15. **Implement HTML output for pregens** _(again, rough format at first, refine incrementally)_
16. **Add JSON export for both SPC and pregens** _(since JSON output is easier, add this before tackling PDFs)_
17. **Add API support to accommodate JSON output requirements**.
18. **Test SPC and Player pregens with API integration** _(check correctness and handling)_

### **7. Ongoing Adjustments and API Improvements:**
19. **Add PDF output for SPC character sheets** _(this may need multiple iterations for formatting)_
20. **Refine API response structures to support the PDF requirements** _(e.g., richer metadata)_
21. **Test PDF output for SPCs and pregens** _(check visual output consistency and detail)_

### **8. Iterate More on Testing and Cross-Compatibility:**
22. **Test SPC Wizard for edge cases across all input types** _(robustness testing, parallel with more output work)_
23. **Test pregeneration with edge cases to ensure weighted randomization works**.
24. **Cross-browser and UI testing for forms and character sheets** _(make sure it works smoothly in multiple environments)_

### **Approach for API Enhancements**:
- **Iterate As Needed**: Instead of treating the **API updates as a single giant milestone**, add or adjust **endpoints incrementally** based on the **needs of the current front-end work**.
- **Backward Compatibility**: Whenever updating existing endpoints, keep backward compatibility by **adding new parameters** or **optional fields** that won’t break existing use cases.

### **Key Workflow Insights**:
- The idea here is to **iterate continuously**, ensuring that the **UI** and **API** evolve side by side. This way, each time a feature is added, you can **test it visually**.
- By keeping tasks **small and modular**, you always have something tangible that you can verify—whether it’s API behavior or a new character sheet output.
