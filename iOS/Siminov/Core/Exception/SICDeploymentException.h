///
/// [SIMINOV FRAMEWORK]
/// Copyright [2015] [Siminov Software Solution LLP|support@siminov.com]
///
/// Licensed under the Apache License, Version 2.0 (the "License");
/// you may not use this file except in compliance with the License.
/// You may obtain a copy of the License at
///
///     http://www.apache.org/licenses/LICENSE-2.0
///
/// Unless required by applicable law or agreed to in writing, software
/// distributed under the License is distributed on an "AS IS" BASIS,
/// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
/// See the License for the specific language governing permissions and
/// limitations under the License.
///



#import "SICSiminovCriticalException.h"

/**
 * This is runtime-time exception, which is thrown if any exception occur at time of initialization of core.
 */
@interface SICDeploymentException : SICSiminovCriticalException

/**
 * Deployment Exception Constructor
 * @param classname Name of class
 * @param methodname Name of method
 * @param exceptionmessage Exception Message
 */
- (id)initWithClassName:(NSString * const)classname methodName:(NSString * const)methodname message:(NSString * const)exceptionmessage;

@end
